<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\NiveauController;
use Illuminate\Support\Facades\Route;

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
    return view('importation.import');
});

Route::resource('filieres', FiliereController::class);
Route::resource('classes', ClasseController::class);
Route::resource('niveaux', NiveauController::class);

Route::get('/import', function () {
    return view('importation.import');
});
Route::get('/accueil', function () {
    return view('importation.accueil');
});
Route::get('/etudiants', function () {
    return view('Recuperation.etudiants');
});
Route::get('/fichier', function () {
    return view('importation.fichier');
});
Route::get('/formulaire1', function () {
    return view('importation.formulaire1');
});
Route::get('/niveau', function () {
    return view('Recuperation.niveau');
});
Route::get('/formulaire2', function () {
    return view('importation.formulaire2');
});

Route::post("Filiere/csvToArray", "FiliereController@csvToArray")->name('Filiere.csvToArray');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
