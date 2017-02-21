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
    
    public function getEvent($id)
    {
        $event = DB::table('events')
                    ->where('id',$id)
                    ->first();
        $sportPic=$this->getSportPic($event->sport_id);
        
        $kantxaName=DB::table('kantxas')
                    ->select('name')
                    ->where('id',$event->kantxa_id)
                    ->first();
        
        $partakes = DB::table('partakes')
                    ->where('event_id',$id)
                    ->get();
                    
        $creator = DB::table('users')
                    ->where('id', $event->created_by)
                    ->first();
        
        $control = [];
        
        $partakeControl=DB::table('partakes')
                    ->where('event_id',$id)
                    ->get();

        for($i=0;$i<count($partakeControl);$i++){
            $control[$i]=$partakeControl[$i]->user_id;
        };
        
        $partakes = DB::table('users')
                        ->whereIn('id', $control)
                        ->get();
                        
        return view('events.event',compact('event','sportPic','partakes','kantxaName','creator','partakes'));
    }
    
    public function participate($id)
    {
        $array=[
            'user_id'=>Auth::user()->id,
            'event_id'=> $id
        ];
        DB::table('partakes')->insert($array);
        return redirect('/event/'.$id)->with('status', '¡Te has unido al evento!');
    }
}
