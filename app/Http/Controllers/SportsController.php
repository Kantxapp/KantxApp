<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SportsController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sports = DB::table('sports')->get();
        $user_id = Auth::user()->id;
        $userSports = $this->userSports();
        return view('sports',compact('sports', 'user_id', 'userSports'));
    }
    
    public function userSports()
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
        // return view('user_sports',['sports' => $sports]);

        // select * from sports where id in (select sport_id from user_sports where user_id=1);
    }
    
    public function userInsert(Request $r)
    {

        
        $ids = explode('_',$r->id);
        $idUser = explode('=',$ids[0]);
        $idUserValue = $idUser[1];
        $idSport = explode('=',$ids[1]);
        $idSportValue = $idSport[1];
        

        $userSport = DB::table('user_sports')->where([
            ['user_id', '=', $idUserValue],
            ['sport_id', '=', $idSportValue],
        ])->first();
        
        if ($userSport == ''){
            $insertUserSport = DB::table('user_sports')->insert(
                ['user_id' => $idUserValue, 'sport_id' => $idSportValue]
            );
            return 'gehitua';
        }else{
            $deleteUserSport = DB::table('user_sports')->where([
                        ['user_id', '=', $idUserValue],
                        ['sport_id', '=', $idSportValue],
                    ])->delete();
            return 'ezabatua';
        }
        return 'hutsa';
    }
}
