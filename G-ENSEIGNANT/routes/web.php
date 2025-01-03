<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/emploi/store', [EnseignantController::class, 'store'])->name('emploi.store');

Route::get('/emploi-temps', [EnseignantController::class,'A']);

Route::get('/liste-emplois',[EnseignantController::class,'B']);

Route::get('/tableau',[EnseignantController::class,'C']);

Route::get('/inscription',[EnseignantController::class,'D']);

Route::get('/liste-utilisateurs',[EnseignantController::class,'E']);

Route::get('/occupation',[EnseignantController::class,'F'])->middleware('auth');

Route::get('/liste-occupations',[EnseignantController::class,'G'])->middleware('auth');

Route::get('/paiement',[EnseignantController::class,'H']);

Route::get('/liste-paiements',[EnseignantController::class,'I'])->middleware('auth');

Route::get('/filiere',[EnseignantController::class,'J'])->middleware('auth');


Route::get('/connexion',[EnseignantController::class,'L'])->name('login');

Route::get('/professeur',[EnseignantController::class,'M'])->middleware('auth');

Route::get('/professeur-emploi',[EnseignantController::class,'N'])->middleware('auth');

// Route::get('/professeur-paiement',[EnseignantController::class,'O'])->middleware('auth');

Route::get('/message',[EnseignantController::class,'P'])->middleware('auth');




// Route::post('/filiere/traitement', [EnseignantController::class, 'ajouter_filiere_traitement']);



// Route::post('/occupation/store', [EnseignantController::class, 'ajout_occupation_traitement'])->name('occupation.store');



Route::get('/liste-filieres', [EnseignantController::class, 'K'])->middleware('auth');



Route::post('/filiere/store', [EnseignantController::class, 'ajouter_filiere_traitement'])->name('filiere.store');


Route::post('/occupation/store', [EnseignantController::class, 'ajouter_occupation_traitement'])->name('occupation.store');


Route::post('/emploi/store', [EnseignantController::class, 'store'])->name('emploi.store');



// Route::post('/emploi/store', [EnseignantController::class, 'store'])->name('emploi.store');



Route::get('/supprimer/filiere/{id}', [EnseignantController::class, 'supprimer_filiere']);



Route :: get('/modifier/filiere/{id}',[EnseignantController::class,'update_filiere']);



Route::post('/filiere/update', [EnseignantController::class, 'traitement_filiere'])->name('filiere.update');




Route::get('/supprimer/occupation/{id}', [EnseignantController::class, 'supprimer_occupation']);



Route :: get('/modifier/occupation/{id}',[EnseignantController::class,'update_occupation']);



Route::post('/occupation/update', [EnseignantController::class, 'modifier_occupation'])->name('occupation.update');

// Route::post('/occupation/update', [OccupationController::class, 'update'])->name('occupation.update');



Route::post('/inscription/store', [EnseignantController::class, 'ajouter_inscription']);


Route::post('/yann/utilisateur', [EnseignantController::class, 'ako']);



Route::post('/ajouter/utilisateur',[EnseignantController::class,'login']);



Route::get('/deconnexion/utilisateur',[EnseignantController::class,'deconnexion']);


Route::get('/supprimer/utilisateur/{id}',[EnseignantController::class,'supprimer_utilisateur']);


Route::get('/modifier/paiement/{id}',[EnseignantController::class,'modifier_paiement']);



Route::get('/supprimer/paiement/{id}',[EnseignantController::class,'supprimer_paiement']);

Route::get('/detail/utilisateur',[EnseignantController::class,'detail_utilisateur']);


Route::get('/audit',[EnseignantController::class,'audit']);



Route::get('/mot/passe',[EnseignantController::class,'mot_passe']);


Route::get('/mot/passe/nouveau',[EnseignantController::class,'new_mot_passe']);





Route::post('/ajouter/password',[EnseignantController::class,'verifier_passe']);



Route::post('/new/password',[EnseignantController::class,'nouveau']);




Route::post('/paiement/update',[EnseignantController::class,'upadte_paiement'])->name('paiement.upadte');



Route::post('/paiement/store', [EnseignantController::class, 'ajout_paiement']);


Route::post('/emploi/modifier', [EnseignantController::class, 'modifier_traitement_emploi']);



Route :: get('/rapport',[EnseignantController::class,'pdf']);


Route::get('/télécharger/emploi', [EnseignantController::class, 'Télécgarger_emploi_temps']);




Route::get('/supprimer/emploi/{id}', [EnseignantController::class, 'supprimer_emploi']);


Route::get('/modifier/emploi/{id}', [EnseignantController::class, 'modifier_emploi']);


Route::get('/professeur/paiements', [EnseignantController::class, 'paiementsProfesseur'])->name('professeur.paiements')->middleware('auth');


Route :: get('/modifier/utilisateur/{id}',[EnseignantController::class,'modifier']);


Route::post('/inscription/update',[EnseignantController::class,'inscription']);


Route::get('/professeur/password', [EnseignantController::class, 'franck']);



Route::post('/new/password',[EnseignantController::class,'modifier_password']);


Route::post('/contacter/administration',[ContactController::class,'contacter_administration']);


