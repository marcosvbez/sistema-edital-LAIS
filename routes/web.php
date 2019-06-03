<?php

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
    return view('/auth.login');
});

Auth::routes();

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebookProvider');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cbos', 'CbosController');

Route::get('/profissionals', 'ProfissionalsController@index');
Route::post('/profissionals', 'ProfissionalsController@store');
Route::get('/profissionals/create', 'ProfissionalsController@create');


Route::resource('tipoVinculos', 'TipoVinculoController');





Route::resource('vinculos','VinculosController');


//Route::get('/vinculos', 'VinculosController@index');
//Route::post('/vinculos', 'VinculosController@store');
//Route::get('/vinculos/create', 'VinculosController@create');

