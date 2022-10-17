<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EleveController;
use App\Http\Controllers\AbsenceController;

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

Route::get('/gestion_eleves', [EleveController::class, 'index']);
Route::get('/ajouter_eleve', [EleveController::class, 'ajouterPage']);
Route::get('/eleve/{cne}', [EleveController::class, 'modifierPage']);
Route::get('/supprimer_eleve/{cne}', [EleveController::class, 'supprimerPage']);
Route::get('/eleve/{eleve}/absences', [EleveController::class, 'eleveAbsences']);

Route::post('/ajouter_eleve', [EleveController::class, 'ajouter']);
Route::post('/eleve/{cne}', [EleveController::class, 'modifier']);
Route::post('/supprimer_eleve/{cne}', [EleveController::class, 'supprimer']);

Route::get('/gestion_absences', [AbsenceController::class, 'index']);
Route::get('/gestion_absence', [AbsenceController::class, 'index']);
Route::get('/ajouter_absence', [AbsenceController::class, 'ajouterPage']);
Route::post('/ajouter_absence', [AbsenceController::class, 'ajouterOuModifier']);
Route::get('/modifier_absence', [AbsenceController::class, 'modifierPage']);
Route::post('/modifier_absence', [AbsenceController::class, 'ajouterOuModifier']);
Route::get('/supprimer_absence/{cne}/{semaine}', [AbsenceController::class, 'supprimerPage']);
Route::post('/supprimer_absence/{cne}/{semaine}', [AbsenceController::class, 'supprimer']);
