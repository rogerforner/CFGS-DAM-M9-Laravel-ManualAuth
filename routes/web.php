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

//Clousure o funció anònima, funció que no té nom i per tant no pots cridar-la  a un altre lloc.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasques', function () {
    return view('tasques');
});

//PAS 1: Middleware? Com protegir pàgines?


//To logout.

//Auth::logout();
//
//Route::get('/home', 'HomeController@index');
//
//Route::get('/login', 'LoginController@showLoginForm');
//
//Route::get('/register', 'RegisterController@register');
//
//Route::post('/login', 'LoginController@PostLogin');

/*
Route::get('/register', function() {
    return view('auth.register');
});
*/
//Per ser dinàmic canvio base de dades no codi.