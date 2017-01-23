<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio;
use App\Sensor;
use DB;
class TwilioController extends Controller
{
    //
    public function sendMessage($message)
    {
        return Twilio::message(+34955160448, $message);
    }
    public function receiveMessage(Request $request)
    {
    
    
    $body =$request['Body'];
    
    $params = explode(",", $body);
    
    $viento = explode("=", $params[0]);
    $sol = explode("=", $params[1]);
    $ocupado = explode("=", $params[2]);
    
    $sensor =  Sensor::create([
            'viento' => $viento[1],
            'sol' => $sol[1],
            'ocupado' => (int)$ocupado[1],

        ]);
        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>";
        echo "<Response>";
        echo "<Sms>Kantxapp</Sms>";
        echo "</Response>";
    }
}


