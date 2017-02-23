<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KantxaRequest extends Mailable
{
    use Queueable, SerializesModels;

    protected $formdata;
    protected $formname;
    protected $formaddress;
    protected $formsports;
    protected $formtime;
    protected $formemail;

    public function __construct($formname, $formaddress, $formsports, $formtime,$formemail)
    {
        // $this->formdata = $formdata;
        $this->formname = $formname;
        $this->formaddress = $formaddress;
        $this->formsports = $formsports;
        $this->formtime = $formtime;
        $this->formemail = $formemail;
        
        
    }

    public function build()
    {
        
        return $this->from($this->formemail)
                    ->view('mails.requestkantxasend')
                    ->subject('Kantxa Request')
                    ->with([
                        'name' => $this->formname,
                        'address' => $this->formaddress,
                        'sports' => $this->formsports,
                        'time' => $this->formtime,
                        ]);

    }
}
