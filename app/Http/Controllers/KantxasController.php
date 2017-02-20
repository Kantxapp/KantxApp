<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Get_sports;
use App\Kantxa;
use App\Sensor;
use DB;

class KantxasController extends Controller
{
    use Get_sports;
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
        $sensors = Sensor::all();
        // return $kantxas;
        return view('kantxas.getkantxas', compact('kantxas','sensors'));
    }
    
     public function editKantxa($id){

         
         $kantxa = DB::table('kantxas')
                ->where('id', '=', $id)
                ->get();
        // return $kantxa;
        return view('kantxas.editkantxas', compact('kantxa'));
     }
     
     public function saveEditKantxa(Request $r){

         $kantxa = DB::table('kantxas')
                ->where('id', '=', $r->id)
                ->get();

         $this->validate($r, [
            'place_id' => 'required|max:30',
            'name' => 'required|max:50',
            'streetNumber' => 'max:15',
            'route' => 'max:30',
            'locality' => 'max:15',
            'province' => 'max:25',
            'formatedAddress' => 'required|max:70',
            'lat' => 'required|max:20',
            'lng' => 'required|max:20',
            'sensor_id' => 'max:5',

        ]);
        if($r->hasFile('KantxaPic')){

            DB::table('kantxas')
            ->where('id', $r->id)
            ->update(
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
                'KantxaPic' => $r->KantxaPic->store('/public/kantxas')
                
            ]);
                 $kantxa = DB::table('kantxas')
                ->where('id', '=', $r->id)
                ->get();
            $arrayKantxa = explode("/", $kantxa[0]->KantxaPic);

            $arrayKantxa[0] = 'storage';
            $arrayKantxaCorrect = '/' . $arrayKantxa[0] . '/' . $arrayKantxa[1] . '/' . $arrayKantxa[2];
            DB::table('kantxas')
            ->where('id', $r->id)
            ->update(
            ['KantxaPic' => $arrayKantxaCorrect]);
        }else{
            if ($r->sensor_id != ""){
                
            
            DB::table('kantxas')
            ->where('id', $r->id)
            ->update(
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
                'sensor_id' => $r->sensor_id
                
            ]);
            }else{
            DB::table('kantxas')
            ->where('id', $r->id)
            ->update(
            [   
                'place_id' => $r->place_id,
                'name' => $r->name,
                'streetNumber' => $r->streetNumber,
                'route' => $r->route,
                'locality' => $r->locality,
                'province' => $r->province,
                'formatedAddress' => $r->formatedAddress,
                'lat' => $r->lat,
                'lng' => $r->lng
                
            ]);
            }
        }
        return redirect()->route('kantxas.get');
     }
     public function getKantxa($id){
        $sports = $this->getKantxaSports($id);
        $kantxa = DB::table('kantxas')->where('id', $id)->first();
        $sensor = DB::table('sensors')->where('id', $kantxa->sensor_id)->first();
        return view('kantxas.infokantxa', compact('kantxa','sensor','sports'));
     }
     public function findKantxa()
     {
        return view('kantxas.findkantxa');   
     }
}
