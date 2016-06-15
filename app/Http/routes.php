<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UsuarioController@index');
Route::get('contacto', 'FrondController@contacto');
Route::get('reviews', 'FrondController@reviews');
Route::resource('usuario','UsuarioController');
Route::resource('genero','GeneroController');
/*
Route::get('lista/usuario', [
    'as' => 'profile', 'uses' => 'UsuarioController@index'
]);
*/

Route::get('probar/movie', [
    'as' => 'probar_path', 'uses' => 'MovieController@index'
]);

