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
Route::get('/', function () {
    return view('index');
});

Route::get('/akoj','AkojController@index');
Route::get('/akoj/pid/{pid}','AkojController@problem');

Route::get('/nyoj','NyojController@index');
Route::get('/nyoj/pid/{pid}','NyojController@problem');

Route::get('/hduoj','HduojController@index');
Route::get('/hduoj/pid/{pid}','HduojController@problem');

Route::post('/registr','UserController@register');

Route::get('/step',function(){
	return view('step');
});
