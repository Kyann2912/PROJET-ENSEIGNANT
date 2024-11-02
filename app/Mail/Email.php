<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $code_verification;



    public function __construct($code_verification){
        $this->code_verification = $code_verification;

    }



    public function build(){
        return $this->view('enseignant.password')->subject("Mot de Passe ");
    
    }


}

