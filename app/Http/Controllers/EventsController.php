<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Get_sports;
use Illuminate\Support\Facades\Input;
use DB;
class EventsController extends Controller
{
    use Get_sports;
    //
    public function createEvent(Request $r)
    {

        $getSelectValue = $r->get('sport_id');
        return $getSelectValue;
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
