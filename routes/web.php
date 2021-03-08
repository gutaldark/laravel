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
    return view('/home');
});

//Rutas de los alumnos
Route::resource('alumnos', 'alumnosController');
Route::get('/alumnos/index', 'alumnosController@index');
Route::get('/alumnos/create', 'alumnosController@create')->name('alumnos.create');
Route::get('/alumnos/edit', 'alumnosController@edit');
Route::get('/alumnos/pdf', 'alumnosController@pdf');
Route::delete('alumnos/{id}', 'alumnosController@destroy')->name('alumnos.destroy');

//Rutas de los representantes
Route::resource('representantes', 'RepresentantesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de los usuarios
Route::resource('usuarios', 'UsuariosController');