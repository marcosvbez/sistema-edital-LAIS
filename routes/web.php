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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cbos', 'CbosController@index');

Route::get('/profissionals', 'ProfissionalsController@index');
Route::post('/profissionals', 'ProfissionalsController@store');
Route::get('/profissionals/create', 'ProfissionalsController@create');


Route::get('/tipoVinculos', 'TipoVinculoController@index');





Route::resource('vinculos','VinculosController');


//Route::get('/vinculos', 'VinculosController@index');
//Route::post('/vinculos', 'VinculosController@store');
//Route::get('/vinculos/create', 'VinculosController@create');

