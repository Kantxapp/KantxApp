<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio;
use App\Sensor;
use DB;
use Illuminate\Support\Facades\App;

class TwilioController extends Controller
{
    //
    public function sendMessage($message)
    {
        return Twilio::message(+34955160448, $message);
    }
    public function receiveMessage(Request $request)
    {
    
    $pusher = App::make('pusher');

    $body =$request['Body'];
    
    $params = explode(",", $body);
    // $lloverKeyValue = explode("=", $params[0]);
    // $humedadKeyValue = explode("=", $params[1]);
    // $temperaturaKeyValue = explode("=", $params[2]);
    // $ocupadoKeyValue = explode("=", $params[3]);
    // $vientoKeyValue = explode("=", $params[4]);
    // $radiacionKeyValue = explode("=", $params[5]);
    // $idSensorKeyValue = explode("=", $params[6]);
    foreach ($params as $key => $value){
        
        $keyValue = explode("=", $params[$key]);
        
        switch ($keyValue[0]) {
            case 'llover':
                $llover = $keyValue[1];
                break;
            case 'humedad':
                $humedad = $keyValue[1];
                break;
            case 'temperatura':
                $temperatura = $keyValue[1];
                break;
            case 'ocupado':
                $ocupado = $keyValue[1];
                break;
            case 'viento':
                $viento = $keyValue[1];
                break;
            case 'radiacion':
                $radiacion = $keyValue[1];
                break;
            case 'idSensor':
                $idSensor = $keyValue[1];
                break;
        }

    }
    $sensor = DB::table('sensors')
            ->where('id', $idSensor)
            ->update(
            [   
                'llover' => $llover,
                'humedad' => $humedad,
                'temperatura' => $temperatura,
                'ocupado' => $ocupado,
                'viento' => $viento,
                'radiacion' => $radiacion
                
            ]);
    $arr = array('idSensor' => $idSensor, 'llover' => $llover, 'humedad' => $humedad, 'temperatura' => $temperatura, 'ocupado' => $ocupado, 'radiacion' => $radiacion);
                $data=json_encode($arr);
    $pusher->trigger( 'sensor-channel',
                      'sensor-change', 
                      $data);


        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>";
        echo "<Response>";
        echo "<Sms>Kantxapp</Sms>";
        echo "</Response>";
    }
}


