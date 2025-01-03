<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Password extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $prenoms;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$prenoms)
    {
        $this->nom = $nom;
        $this->prenoms = $prenoms;

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
        return $this->view('enseignant.alerte')->subject("Modification de Mot de Passe ");
     }
}
