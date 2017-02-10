<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use App\Kantxa;

class GoogleMapsController extends Controller
{
    public function createKantxa($name){
        $this->name = $name;
        $response = \GoogleMaps::load('geocoding')
        ->setParam (['address' => $name])
        ->get();
        $obj = json_decode($response);
        $place_id = $obj->{"results"}[0]->{"place_id"};
        $formatedAddress = $obj->{"results"}[0]->{"formatted_address"};
        
        if ($obj->{"results"}[0]->{"address_components"}[0]->{"types"}[0] == "street_number"){
            $streetNumber = $obj->{"results"}[0]->{"address_components"}[0]->{"long_name"};
        }
        if ($obj->{"results"}[0]->{"address_components"}[1]->{"types"}[0] == "route"){
            $route = $obj->{"results"}[0]->{"address_components"}[1]->{"long_name"};
        }
        if ($obj->{"results"}[0]->{"address_components"}[2]->{"types"}[0] == "locality"){
            $locality = $obj->{"results"}[0]->{"address_components"}[2]->{"long_name"};
        }
        if ($obj->{"results"}[0]->{"address_components"}[3]->{"types"}[0] == "administrative_area_level_2"){
            $province = $obj->{"results"}[0]->{"address_components"}[3]->{"long_name"};
        }
        
        $lat = $obj->{"results"}[0]->{"geometry"}->{"location"}->{"lat"};
        $lng = $obj->{"results"}[0]->{"geometry"}->{"location"}->{"lng"};

        // return $response;
        // $sensor = Sensor::create([
                    
            
        //     ]);
        // $sensor_id = Sensor::orderBy('id', 'desc')->first()->id;



        
        return view('kantxas.createkantxa', compact('place_id', 'name', 'streetNumber', 'route', 'locality', 'province', 'formatedAddress', 'lat', 'lng'));
        // return $streetNumber . $route . $locality . $province . $formatedAddress . $placeId . $name ;

    }
    
    public function saveKantxa(Request $r){
        
        $this->validate($r, [
            'place_id' => 'required|max:30',
            'name' => 'required|max:50',
            'streetNumber' => 'max:15',
            'route' => 'max:15',
            'locality' => 'max:15',
            'province' => 'max:25',
            'formatedAddress' => 'required|max:50',
            'lat' => 'required|max:20',
            'lng' => 'required|max:20',
            'sensor_id' => 'max:5',
            'kantxaPic' => 'required|max:30',

        ]);
        if (!$r->sensor_id == ""){
            $kantxa = Kantxa::create(
            [   
                'place_id' => $r->place_id,
                'name' => $r->name,
                'streetNumber' => $r->streetNumber,
                'route' => $r->route,
                'locality' => $r->locality,
                'province' => $r->province,
                'formatedAddress' => $r->formatedAddress,
                'lat' => $r->lat,
                'lng' => $r->lng,
                'sensor_id' => $r->sensor_id,
                'kantxaPic' => $r->kantxaPic->store('/public/kantxas')
                
            ]);
        }else{
            $kantxa = Kantxa::create(
            [   
                'place_id' => $r->place_id,
                'name' => $r->name,
                'streetNumber' => $r->streetNumber,
                'route' => $r->route,
                'locality' => $r->locality,
                'province' => $r->province,
                'formatedAddress' => $r->formatedAddress,
                'lat' => $r->lat,
                'lng' => $r->lng,
                'kantxaPic' => $r->kantxaPic->store('/public/kantxas')
                
            ]);
        }

        if($r->hasFile('kantxaPic'))
        {

            $arrayKantxa = explode("/", $kantxa->kantxaPic);
            $arrayKantxa[0] = 'storage';
            $arrayKantxaCorrect = '/' . $arrayKantxa[0] . '/' . $arrayKantxa[1] . '/' . $arrayKantxa[2];
            $kantxa->update([
                'kantxaPic' => $arrayKantxaCorrect
            ]);
        }
    }
}
