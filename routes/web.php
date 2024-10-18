<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnseignantController;


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


Route::get('/connexion',[EnseignantController::class,'L']);

Route::get('/professeur',[EnseignantController::class,'M']);

Route::get('/professeur-emploi',[EnseignantController::class,'N']);

Route::get('/professeur-paiement',[EnseignantController::class,'O']);

Route::get('/message',[EnseignantController::class,'P']);




Route::post('/filiere/traitement', [EnseignantController::class, 'ajouter_filiere_traitement']);


Route::get('/liste-filieres', [EnseignantController::class, 'K']);



Route::post('/filiere/store', [EnseignantController::class, 'ajouter_filiere_traitement'])->name('filiere.store');



Route::get('/supprimer/filiere/{id}', [EnseignantController::class, 'supprimer_filiere']);

