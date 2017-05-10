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



Route::get('/', 'ChatController@index')->middleware('auth');

Route::get('/email', 'MessagesController@email');


Route::auth();

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::post('/send', 'MessagesController@send');
Route::get('/compose', 'MessagesController@compose');
