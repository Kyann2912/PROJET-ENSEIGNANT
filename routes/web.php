<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnseignantController;
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


Route::get('/emploi-temps', [EnseignantController::class,'A']);

Route::get('/liste-emplois',[EnseignantController::class,'B']);

Route::get('/tableau',[EnseignantController::class,'C']);

Route::get('/inscription',[EnseignantController::class,'D']);

Route::get('/liste-utilisateurs',[EnseignantController::class,'E']);

Route::get('/occupation',[EnseignantController::class,'F']);

Route::get('/liste-occupations',[EnseignantController::class,'G']);

Route::get('/paiement',[EnseignantController::class,'H']);

Route::get('/liste-paiements',[EnseignantController::class,'I']);

Route::get('/filiere',[EnseignantController::class,'J']);


Route::get('/connexion',[EnseignantController::class,'L'])->name('login');

Route::get('/professeur',[EnseignantController::class,'M']);

Route::get('/professeur-emploi',[EnseignantController::class,'N']);

Route::get('/professeur-paiement',[EnseignantController::class,'O']);

Route::get('/message',[EnseignantController::class,'P']);




// Route::post('/filiere/traitement', [EnseignantController::class, 'ajouter_filiere_traitement']);



// Route::post('/occupation/store', [EnseignantController::class, 'ajout_occupation_traitement'])->name('occupation.store');



Route::get('/liste-filieres', [EnseignantController::class, 'K']);



Route::post('/filiere/store', [EnseignantController::class, 'ajouter_filiere_traitement'])->name('filiere.store');


Route::post('/occupation/store', [EnseignantController::class, 'ajouter_occupation_traitement'])->name('occupation.store');




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






