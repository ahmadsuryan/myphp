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

//Route::get('/home', 'HomeController@index');
//Route::get('/register', 'AuthController@register');
//Route::get('/welcome', 'AuthController@welcome');

//Route::get('/tables', 'TugasController@table');

Route::get('/', 'TugasController@table');
Route::get('/data-tables', 'TugasController@datatable');

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');








