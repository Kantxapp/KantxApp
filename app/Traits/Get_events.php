<?php
namespace App\Traits;
use DB;
trait Get_events
{
    public function getAllEvents()
    {
        $events=DB::table('events')->get();
        return $events;
    }
    
    public function getKantxaEvents($id)
    {
        $events = DB::table('events')
                    ->where('kantxa_id',$id)
                    ->get();
        return $events;
    }
    
    public function getUserEvents()
    {
        
    }
}