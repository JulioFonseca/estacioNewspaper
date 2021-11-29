<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriasController;

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

Route::get('/materias', 'App\Http\Controllers\MateriasController@index');

Route::get('/materias/create','App\Http\Controllers\MateriasController@create');

Route::get('/materias/{materias}','App\Http\Controllers\MateriasController@show');

Route::post('/materias', 'App\Http\Controllers\MateriasController@store');

Route::get('/materias/{materias}/edit','App\Http\Controllers\MateriasController@edit');

Route::put('/materias/{materias}','App\Http\Controllers\MateriasController@update');

Route::delete('/materias/{materias}','App\Http\Controllers\MateriasController@destroy');

Route::get('materias/{materias}/filter','App\Http\Controllers\MateriasController@filter');

Route::get('assuntos/','App\Http\Controllers\AssuntoController@index');

Route::get('/assuntos/create','App\Http\Controllers\AssuntoController@create');

Route::post('/assuntos', 'App\Http\Controllers\AssuntoController@store');

Route::get('/assuntos/{assuntos}/edit','App\Http\Controllers\AssuntoController@edit');

Route::put('/assuntos/{assuntos}','App\Http\Controllers\AssuntoController@update');

Route::delete('/assuntos/{assuntos}','App\Http\Controllers\AssuntoController@destroy');