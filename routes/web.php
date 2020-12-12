<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/contato', 'ContatoController@index');
Route::get('/contato/create', 'ContatoController@create');
Route::post('/contato/store', 'ContatoController@store');
Route::get('/contato/edit/{id}', 'ContatoController@edit');
Route::post('/contato/update/{id}', 'ContatoController@update');
Route::get('/contato/deletar/{id}', 'ContatoController@destroy');
