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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//---------------ROUTE DES FICHE LIVRES-----------//


Route::get('/fichebook', 'FichebookController@index')->name('fichebook');

//---------------ROUTE DE LA LISTE DES LIVRES--------//

Route::get('/listelivre', 'ListeLivreController@index')->name('listelivre');

//--------------ROUTE DE MON PANIER------------------//

Route::get('/panier', 'PanierController@index')->name('panier');
