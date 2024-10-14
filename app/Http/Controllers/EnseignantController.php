<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantController extends Controller
{

    public function A(){
        return view('enseignant.emploi-temps');
    }
    public function B(){
        return view('enseignant.listeemploitemps');

    }

    public function C(){
        return view('enseignant.tableau');
    }

    public function D(){
        return view('enseignant.inscription');
    }
    public function E(){
        return view('enseignant.liste-utilisateur');
    }

    public function F(){
        return view('enseignant.occupation');
    }

    public function G(){
        return view('enseignant.liste-occupation');
    }

    public function H(){
        return view('enseignant.paiement');
    }
    
    public function I(){
        return view('enseignant.liste-paiement');
    }

    public function J(){
        return view('enseignant.filiere');
    }

    public function K(){
        return view('enseignant.liste-filiere');
    }

    public function L(){
        return view('enseignant.connexion');
    }

    public function M(){
        return view('enseignant.professeur');
    }

    public function N(){
        return view('enseignant.professeur-emploi');
    }

    public function O(){
        return view('enseignant.professeur-paiement');
    }

    public function P(){
        return view('enseignant.message');
    }


    //
}
