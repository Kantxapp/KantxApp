<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Session;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    //
//   public function showContact()
//   {
//     return view('pages.contact');
//   }

  public function sendContact(Request $request)
  {
    // $formdata = $request->all();
    // var_dump($formdata);
    
    $formname = $request->name;
    $formemail = $request->email;
    $formphone = $request->phone;
    $formmessage = $request->message;
    $formtime = (array)  Carbon::now();
    $formtime = $formtime['date'] ;
    
    
    Mail::to('kantxapp@gmail.com')->send(new Contact($formname, $formemail, $formphone, $formmessage, $formtime));
    
    return redirect('/#form1-f')->with('status', 'Gracias por contactar con nosotros!');

    // // return view('mails.contactsend');
  }

}
