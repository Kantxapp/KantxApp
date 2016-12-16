<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $formdata;
    protected $formname;
    protected $formemail;
    protected $formphone;
    protected $formmessage;
    protected $formtime;

    public function __construct($formname, $formemail, $formphone, $formmessage, $formtime)
    {
        // $this->formdata = $formdata;
        $this->formname = $formname;
        $this->formemail = $formemail;
        $this->formphone = $formphone;
        $this->formmessage = $formmessage;
        $this->formtime = $formtime;
        
        
    }

    public function build()
    {
        
        return $this->from($this->formemail)
                    ->view('mails.contactsend')
                    ->subject('Subject')
                    ->with([
                        'name' => $this->formname,
                        'email' => $this->formemail,
                        'phone' => $this->formphone,
                        'messagee' => $this->formmessage,
                        'time' => $this->formtime,
                        ]);

    }
}
