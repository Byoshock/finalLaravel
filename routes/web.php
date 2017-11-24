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
Route::get('/partido', 'PartidoController@index');
Route::get('/arbitro', 'ArbitroController@index');
Route::post('/particreate', 'PartidoController@create');
Route::post('/arbitrocreate', 'ArbitroController@create');
Route::post('/partidomod', 'PartidoController@edit');
Route::post('/arbimod', 'ArbitroController@edit');
Route::put('/partiupdate/{id}', 'PartidoController@update');
Route::get('/partidestroy/{id}', 'PartidoController@destroy');
Route::put('/arbiupdate/{id}', 'ArbitroController@update');
Route::get('/arbidestroy/{id}', 'ArbitroController@destroy');

Route::get('/agenda', 'AgendaController@index');
Route::post('/agecreate', 'AgendaController@create');
Route::get('/agedit/{id}', 'AgendaController@edit');
Route::put('/agenupdate/{id}', 'AgendaController@update');
Route::get('/agendestroy/{id}', 'AgendaController@destroy');
