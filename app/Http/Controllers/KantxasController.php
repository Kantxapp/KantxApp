<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kantxa;

class KantxasController extends Controller
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
        return view('kantxas');
    }
    public function getKantxas(){
        $kantxas = Kantxa::all();
        return $kantxas;
    }
}
