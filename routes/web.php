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

Route::get('estado', 'EstadoController@index');
Route::get('estado/create', 'EstadoController@create');
Route::post('estado/store', 'EstadoController@store');
Route::get('estado/{id}/destroy', 'EstadoController@destroy');
Route::get('estado/{id}/edit', 'EstadoController@edit');
Route::put('estado/{id}/update', 'EstadoController@update');