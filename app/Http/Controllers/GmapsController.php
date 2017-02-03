<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GmapsController extends Controller
{
    //
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        return view('events');
    }
}
