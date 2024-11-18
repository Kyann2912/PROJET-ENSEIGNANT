<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;  //Pour le pdf
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Filiere;  //Modèle filiere
use App\Models\User; 
use App\Models\Salle;  //Modèle filiere
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Paiement;  //Modèle paiement
use Illuminate\Support\Facades\Auth;
use App\Models\Professeur;  
use Illuminate\Support\Facades\Mail; //Pour le mail
use App\Mail\MessageNotification;    //Pour le mail
use App\Mail\Email;    //Pour le mail



use App\Models\Administrateur;  


class EnseignantController extends Controller
{

    public function A(){
        return view('enseignant.emploi-temps');
    }
    public function B(){
        return view('enseignant.listeemploitemps');

    }

    public function mot_passe(){
        return view('enseignant.mot-passe');
    }


    public function new_mot_passe(){
        return view('enseignant.nouveau-passe');
    }





    public function verifier_passe(Request $request){
        $request->validate([
            'email'=>'required'
        ]);

        $verifier = User :: where('email',$request->email)->exists();
        $code_verification = Str::random(3);
        Mail :: to($request->email)->send(new Email($code_verification));
            // Stocker le code dans la session
        $request->session()->put('code_verification', $code_verification);
        if($verifier){
            return redirect('/mot/passe/nouveau');
        }else{
            return redirect('/mot/passe')->with('message','Email Inconnue en base de données');
        }
    }

    public function nouveau(Request $request){
        $request->validate([
            'code'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirmed'=>'required'
        ]);

        $verifier = User :: where('email',$request->email)->exists();
        $user = User::where('email', $request->email)->first();


        //recupérer la session
        $code_verification = $request->session()->get('code_verification');


        if($code_verification !== $request->code){
            return redirect('/mot/passe/nouveau')->with('valider','Code de verification incorrect.');
        }

        if ($request->password !== $request->confirmed ){
            return redirect('/mot/passe/nouveau')->with('message','Mot de Passe  est différent de la confirmation');
        }
        if($verifier){
            if($user){
                $user->password = Hash::make($request->password);
                $user->save();
                return  redirect ('/connexion');
            }
            else{
                return redirect('/mot/passe/nouveau')->with('yann','Email inconnue');
            }

        }else{
            return redirect('/mot/passe/nouveau')->with('franck',"Veuillez revoir votre email");


        }

    }





    public function D(){
        return view('enseignant.inscription');
    }
    public function E(){
        $users = User:: all();
        return view('enseignant.liste-utilisateur',compact('users'));
    }

    public function F(){
        return view('enseignant.occupation');
    }

    public function G(){
        $occupations = Salle :: all();
        return view('enseignant.liste-occupation',compact('occupations'));
    }

    public function H(){
        return view('enseignant.paiement');
    }
    
    public function I(){
        $paiements = Paiement :: all();
        return view('enseignant.liste-paiement',compact('paiements'));
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

    public function supprimer_occupation($id){
        $occupation = Salle :: find($id);
        $occupation->delete();
        return redirect('/liste-occupations')->with('supprimer','Occupation supprimer avec succès');

    }

    public function L(){
        return view('enseignant.connexion');
    }

    public function M(){
        $user = Auth::user();
        $nom = $user->name;
        $prenoms = $user->prenoms;
        return view('enseignant.professeur',compact('nom','prenoms'));
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

    public function ajouter_occupation_traitement(Request $request){
        $request->validate([
            'nom_salle' =>'required',
            'occupation' =>'required',
            'heure' =>'required|string',
            'date_occupation' =>'required'

        ]);

        $occupation = new  Salle();

        $occupation->nom_salle = $request->nom_salle;
        $occupation->occupation = $request->occupation;
        $occupation->heure = $request->heure;
        $occupation->date_occupation = $request->date_occupation;

        $occupation->save();

        $currentFiliereCount = session('salle', 0);
        session(['salle' => $currentFiliereCount + 1]);

        return redirect('/liste-occupations')->with('message','Occupation ajouter avec succès');

    }

    public function ajout_paiement(Request $request){
        $request->validate([
            'email'=>'required',
            'filiere_niveau'=>'required',
            'cours'=>'required',
            'nbre_heures'=>'required',
            'montant'=>'required',
        ]);

        $paiement = new Paiement();
        $paiement->email = $request->email;
        $paiement->filiere_niveau = $request->filiere_niveau;
        $paiement->cours = $request->cours;
        $paiement->nbre_heures = $request->nbre_heures;
        $paiement->montant = $request->montant;
        $paiement->save();

        $currentFiliereCount = session('paiement', 0);
        session(['paiement' => $currentFiliereCount + 1]);

        return redirect('/liste-paiements')->with('message','Paiement ajouter avec succès')->withInput([]);


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

        return redirect('/liste-filieres')->with('message','Filière ajouter avec succès')->withInput([]);

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

        $user = Auth::user();
        $nom = $user->name;
        $prenoms = $user->prenoms;

        return view('enseignant.tableau', compact('data','filiere','utilisateur','paiement','emploi','salle','nom','prenoms'));
    }


    public function update_filiere($id){
        $filiere = Filiere :: find($id);
        return view ('enseignant.update-filiere',compact('filiere'));
    }


    public function traitement_filiere(Request $request)
    {
        $request->validate([
            'departement' => 'required',
            'nom_filiere' => 'required',
            'responsable' => 'required',
        ]);
    
        $filiere = Filiere::find($request->id);
    
        if (!$filiere) {
            return redirect('/liste-filieres')->with('error', 'Filière non trouvée');
        }

        $filiere->departement = $request->departement;
        $filiere->nom_filiere = $request->nom_filiere;
        $filiere->responsable = $request->responsable;
        $filiere->update();
    
        return redirect('/liste-filieres')->with('modifier', 'Filière modifiée avec succès');
    }

    public function update_occupation($id){
        $occupation = Salle :: find($id);
        return view ('enseignant.O',compact('occupation'));
    }


    public function modifier_occupation(Request $request){

        $request->validate([
            'nom_salle' =>'required',
            'occupation' =>'required',
            'heure' =>'required',
            'date_occupation' =>'required'

        ]);

        $occupation = Salle::find($request->id);

        if (!$occupation) {
            return redirect('/liste-occupations')->with('error', 'Occupation non trouvée');
        }
        $occupation->nom_salle = $request->nom_salle;
        $occupation->occupation = $request->occupation;
        $occupation->heure = $request->heure;
        $occupation->date_occupation = $request->date_occupation;
        $occupation-> update();
        return redirect('/liste-occupations')->with('modifier', 'Occupation modifiée avec succès');
    }


    public function ajouter_inscription(Request $request) {
        $request->validate([
            'name' => 'required',
            'prenoms' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required_if:role,professeur',
            'role' => 'required',
            'password' => 'required_if:role,admin',
        ]);
            $user = new User();
    
            $user->name = $request->name;
            $user->prenoms = $request->prenoms;
            $user->email = $request->email;
            $user->role = $request->role;

            $mot_passe = Str::random(8);
            $email = $request->email;
            $name = $request->name;
            $prenoms = $request->prenoms;

        
            if ($user->role === 'admin') {
                $user->password = Hash::make($request->password);
            } elseif ($user->role === 'professeur') {
                $user->password = Hash :: make($mot_passe); 
            }
            $user->save();


    
        if ($user->role === 'admin') {
            $admin = new Administrateur();
            $admin->id_user = $user->id;
            $admin->save();
        } elseif ($user->role === 'professeur') {
            $professeur = new Professeur();
            $professeur->id_user = $user->id;
            $professeur->matiere= $request->matiere;
            $professeur->save();
        }

        // Envoyer l'email
        Mail::to($email)->send(new MessageNotification($name,$prenoms,$mot_passe));

        $currentFiliereCount = session('utilisateur', 0);
        session(['utilisateur' => $currentFiliereCount + 1]);

        return redirect('/connexion');
    
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $noms = $user->name;
            if ($user->role === 'admin') {
                return redirect('/tableau')->with(compact('noms'));
            } elseif ($user->role === 'professeur') {
                return redirect('/professeur');
            }
        }else{
            return redirect('/connexion')->with('message','Email ou Mot de Passe Incorrect ❌');
        }
    }




    public function deconnexion(Request $request){
        Auth :: logout();
        return redirect('/connexion');
    }

    public function supprimer_utilisateur($id){
        $user = User :: find($id);
        $user->delete();
        
        $currentFiliereCount = session('uti_supprimer', 0);
        session(['uti_supprimer' => $currentFiliereCount + 1]);


        return redirect('/liste-utilisateurs');
    }


    public function detail_utilisateur(){
        return view('enseignant.detail-utilisateur');
    }


    public function audit(){
        $uti_supprimer = session('uti_supprimer', 0);
        $filiere = session('filiere');
        $utilisateur = session('utilisateur');
        $paiement = session('paiement');
        $emploi = session('emploi');
        $salle = session('salle');
        return view('enseignant.audit',compact('filiere','utilisateur','paiement','emploi','salle','uti_supprimer'));
    }


    public function pdf(){
        $uti_supprimer = session('uti_supprimer', 0);
        $filiere = session('filiere');
        $utilisateur = session('utilisateur');
        $paiement = session('paiement');
        $emploi = session('emploi');
        $salle = session('salle');

        $date = Carbon::now()->format('d-m-Y'); 


        $pdf = Pdf::loadView('Enseignant.rapport',compact('utilisateur','salle','filiere','paiement','emploi','uti_supprimer','date'));
        $date = Carbon::now()->format('Y-m-d  H:i:s'); 
        // le PDF télécharger
        return $pdf->download('Audit'.$date.'.pdf');

    }

    public function supprimer_paiement($id){
        $paiement = Paiement::find($id);
        $paiement->delete();
        return redirect('/liste-paiements')->with('vie','Paiement supprimer avec succès');
    }

    public function modifier_paiement($id){
        $paiement = Paiement :: find($id);
        return view ('enseignant.update-paiement',compact('paiement'));
    }


    public function upadte_paiement(Request $request){

        $request->validate([
            'email'=>'required',
            'filiere_niveau'=>'required',
            'cours'=>'required',
            'nbre_heures'=>'required',
            'montant'=>'required',
        ]);

        $paiement =  Paiement :: find($request->id);
        $paiement->email = $request->email;
        $paiement->filiere_niveau = $request->filiere_niveau;
        $paiement->cours = $request->cours;
        $paiement->nbre_heures = $request->nbre_heures;
        $paiement->montant = $request->montant;
        $paiement->save();

        // $currentFiliereCount = session('paiement', 0);
        // session(['paiement' => $currentFiliereCount + 1]);

        return redirect('/liste-paiements')->with('update','Paiement modifier avec succès')->withInput([]);



    }




    

    





    //
}
