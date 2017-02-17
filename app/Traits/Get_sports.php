<?php
namespace App\Traits;
use DB;
use Auth;
trait Get_sports
{
    public function getAllSports()
    {
        $sports = DB::table('sports')->get();
        return $sports;
    }
    
    public function getUserSports()
    {
        $control = [];
        $user_sport_id=DB::table('user_sports')
                    ->where('user_id',Auth::user()->id)
                    ->get();

        for($i=0;$i<count($user_sport_id);$i++){
            $control[$i]=$user_sport_id[$i]->sport_id;
        };
        
        $sports = DB::table('sports')
                    ->whereIn('id', $control)
                    ->get();

        return $sports;

        // select * from sports where id in (select sport_id from user_sports where user_id=1);
    }
}