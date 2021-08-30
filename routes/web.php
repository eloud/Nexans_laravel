<?php

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
     return view('connexion');
});


 Route::get('/gestionUser', function () {
     return view('gestionUser');
 });

Route::post('/gestionUser', function () {
    return view('gestionJeux');
});



Route::get('/listElectricien', function () {
    return view('gestion_liste_electricien');
});
Route::get('/listRevendeur', function () {
    return view('gestion_list_revendeur');
});


Route::get('/jeux', function () {
    return view('gestionJeux');
});

// route four liste distributeur
Route::get('/list_dist', function () {
    return view('gestion_liste_dist');
});


Route::get('/gain', function () {
    return view('gain_profil');
});


Route::get('/tirage_elec', function () {
    return view('tirage_sort_elec');
});

Route::get('/tirage_Revendeur_nationale', function () {
    return view('tirage_rev_natio');
});

// Route for tirage REVENDEUR
Route::get('/tirage_Revendeur_regional', function () {
    return view('tirage_rev_regio');
});

Route::get('/tirage_Revendeur_ville', function () {
    return view('tirage_rev_ville');
});


// Route for liste gagnant
Route::get('/liste_gagnant', function () {
    return view('gestion_liste_gagnant');
});

// Route for condition generale
Route::get('/condition', function () {
    return view('condition_generale');
});



Route::get('/resultatElectricien', function () {
    return view('resultat_scan_elec');
});

// Route for scan revendeur
Route::get('/resultat_revendeur', function () {
    return view('resultat_scan_rev');
});
