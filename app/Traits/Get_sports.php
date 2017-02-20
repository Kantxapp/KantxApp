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
    
    public function getUserSports($slug)
    {
        $control = [];
        
        $userId = DB::table('users')
                    ->where('slug',$slug)
                    ->first();
        $user_sport_id=DB::table('user_sports')
                    ->where('user_id',$userId->id)
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
    public function getUserSportsAuth()
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
    
    public function getKantxaSports($id)
    {
        $control = [];
        $kantxa_sport_id=DB::table('plays')
                    ->where('kantxa_id',$id)
                    ->get();

        for($i=0;$i<count($kantxa_sport_id);$i++){
            $control[$i]=$kantxa_sport_id[$i]->sport_id;
        };
        
        $sports = DB::table('sports')
                    ->whereIn('id', $control)
                    ->get();
        return $sports;
    }
}