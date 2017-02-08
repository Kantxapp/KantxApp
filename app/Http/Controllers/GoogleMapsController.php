<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleMapsController extends Controller
{
    public function getPrueba($izena){
        $response = \GoogleMaps::load('geocoding')
        ->setParam (['address' => $izena])
        ->get();
        
        return $response;

    }
}
