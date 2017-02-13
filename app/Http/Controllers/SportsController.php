<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        return view('sports',['sports' => $sports]);
    }
}
