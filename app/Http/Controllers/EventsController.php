<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Get_sports;
use Auth;
use DB;
class EventsController extends Controller
{
    use Get_sports;
    //
    public function createEvent(Request $r)
    {
        $array = [
            "sport_id" => $r->sport_id,
            'kantxa_id' => $r->kantxa_id,
            'name' => $r->name,
            'max_users' => $r->max_users,
            'start_at' => $r->start_at,
            'rules' => $r->rules,
            'created_by'=>Auth::user()->id,
        ];
        DB::table('events')->insert($array);
        
        return redirect('/kantxa/info/'.$array['kantxa_id'])->with('status', '¡Evento creado!');
    }
    
    public function createEventValues($kantxa_id)
    {
         $kantxa = DB::table('kantxas')
                ->where('id', '=', $kantxa_id)
                ->first();
         
         $sensor = DB::table('sensors')
                ->where('id', '=', $kantxa->sensor_id)
                ->first();
        $sports = $this->getKantxaSports($kantxa_id);
        return view('events.createEvent',compact('kantxa','sensor','sports'));
        // return view('kantxas.editkantxas', compact('kantxa'));
    }
}
