<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', 'Contatos@lista');

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/users', 'Users@index');
Route::get('/contatos', 'Contatos@index');

Route::get('/api/v1/contatos/{id?}', 'Contatos@index');
Route::post('/api/v1/contatos', 'Contatos@store');
Route::post('/api/v1/contatos/{id}', 'Contatos@update');
Route::delete('/api/v1/contatos/{id}', 'Contatos@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
