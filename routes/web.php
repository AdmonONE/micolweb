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

Route::resource('/tecnico','TecnicoController');

Route::resource('/sistema','SistemaController');

Route::get('api/v1/tecnicos','TecnicoController@getTecnicos');

Route::get('api/v1/sistemas','SistemaController@getSistemas');
