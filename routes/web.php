<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formControl;
use App\Http\Controllers\phaseControl;

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

// form
Route::get('/', [formcontrol::class, 'form']);
// ajouter projet
Route::post('/ajouter', [formcontrol::class, 'ajouter']);
// afficher la liste projet
Route::get('/afficher', [formcontrol::class, 'afficher']);
// afficher detail projet
Route::get('/detail/{id}', [formcontrol::class, 'detail']);
// afficher le formulaire de modification
Route::get('/modifier/{id}', [formcontrol::class, 'modifForm']);
// appliquer les modification
Route::post('modifier/modification/{id}', [formcontrol::class, 'modifier']);
// supprimer le projet
Route::get('/supprimer/{id}', [formcontrol::class, 'supp']);

// afficher le formulaire d'ajout phase
Route::get('/detail/formPhase/{id}', [phaseControl::class, 'phaseForm']);
//revenir sur detail
Route::get('/detail/formPhase/annuler/{id}', [phaseControl::class, 'annuler']);
Route::get('/ajouterPhase/{id}', [phaseControl::class, 'phaseForm']);
Route::post('/detail/formPhase/ajoutPhase/{id}', [phaseControl::class, 'ajout']);
Route::get('/formPhase', [phaseControm::class, 'formPhase']);
Route::get('/detail/retour/{id}', [phaseControl::class, 'retour']);