<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $prenoms;
    public $mot_passe;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$prenoms,$mot_passe)
    {
        $this->name = $name;
        $this->prenoms = $prenoms;
        $this->mot_passe = $mot_passe;

        //
    }

    /**
     * Get the message envelope.
     *
     */


    /**
     * Get the message content definition.
     *
     */


    /**
     * Get the attachments for the message.
     *
     */

     public function build(){
        return $this->view('enseignant.message_notification')->subject("Identification d'accès ");
     }

}
