<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio;
use Kantxa;
class TwilioController extends Controller
{
    //
    public function sendMessage($message)
    {
        return Twilio::message(+34955160448, $message);
    }
    public function receiveMessage(Request $request)
    {

        $kantxa = Kantxa::create([
            'clima' => $request->Body,
            ]);
        $kantxa2 = Kantxa::create([
            'clima' => $request['Body'],
            ]);
        $kantxa3 = Kantxa::create([
            'clima' => $request['body'],
            ]);
        $kantxa4 = Kantxa::create([
            'clima' => $_POST->Body,
            ]);
        $kantxa5 = Kantxa::create([
            'clima' => $_POST['Body'],
            ]);
        $kantxa6 = Kantxa::create([
            'clima' => $_POST['body'],
            ]);
        return $kantxa . $kantxa2 . $kantxa3;
    }
}
