<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;  //Modèle filiere
use App\Models\User; 

class EnseignantController extends Controller
{

    public function A(){
        return view('enseignant.emploi-temps');
    }
    public function B(){
        return view('enseignant.listeemploitemps');

    }

    public function C(){
        $filiere = session('filiere', 0);
        $utilisateur = session('utilisateur', 0);
        $paiement = session('paiement', 0);
        $emploi = session('emploi', 0);
        $salle = session('salle', 0);
        $data = [
            'labels'=> ['filiere','utilisateur','paiement','emploi','salle'],
            'values'=> [$filiere,$utilisateur,$paiement,$emploi,$salle]
        ];
        return view('enseignant.tableau', compact('data','filiere','utilisateur','paiement','emploi','salle'));
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
        $filieres = Filiere :: all();
        return view('enseignant.liste-filiere',compact('filieres'));
    }
    
    public function supprimer_filiere($id){
        $filieres = Filiere :: find($id);
        $filieres->delete();
        return redirect('/liste-filieres')->with('supprimer','Filière supprimer avec succès');


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

    public function ajouter_filiere_traitement(Request $request){

        $request->validate([
            'departement' =>'required',
            'nom_filiere' =>'required',
            'responsable' =>'required'
        ]);

        $filiere = new Filiere();
        $filiere->departement = $request->departement;
        $filiere->nom_filiere = $request->nom_filiere;
        $filiere->responsable = $request->responsable;
        $filiere-> save();

        $currentFiliereCount = session('filiere', 0);
        session(['filiere' => $currentFiliereCount + 1]);

        return redirect('/liste-filieres')->with('message','Filière ajouter avec succès');

    }




    //
}
