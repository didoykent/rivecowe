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

Route::get('/', function () {
    return view('index');

});


Route::get('/api/request/{id?}', 'blogController@index');
Route::post('/api/request', 'blogController@store');
Route::post('/api/request/{id}', 'blogController@update');
Route::delete('/api/request/{id}', 'blogController@destroy');
