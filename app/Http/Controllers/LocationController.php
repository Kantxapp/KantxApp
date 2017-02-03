<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function cityXML($filter){
        
    $str = '<'.'?xml version="1.0" encoding="ISO-8859-1" ?'.'>';
    $xml = simplexml_load_file('provinciasypoblaciones.xml');
	$result = $xml->xpath("/lista/provincia[@id='$filter']/localidades");
    $str = $str . $result[0]->asXML();
   
   return response($str, 200)
                  ->header('Content-Type', 'application/xml'); //text/plain
   
    //return $filter;
    }

}
