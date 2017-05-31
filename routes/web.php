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
    return view('user.login');
    // return view('index');
});

Route::get('canchas', 'MainsController@canchas');
Route::get('agregarcanchas', 'MainsController@agregarcanchas');
Route::get('modificarcanchas', 'MainsController@modificarcanchas');
Route::get('eliminarcanchas', 'MainsController@eliminarcanchas');

Route::get('reservas', 'MainsController@reservas');
Route::get('reservasuser', 'MainsController@reservasuser');

Route::get('promociones', 'MainsController@promociones');
Route::get('agregarpromociones', 'MainsController@agregarpromociones');

Route::get('ganancias', 'MainsController@ganancias');

Route::get('inicio', 'MainsController@index');

Route::get('iniciouser', 'MainsController@indexuser');

Route::get('registrar', 'UsersController@registrar');