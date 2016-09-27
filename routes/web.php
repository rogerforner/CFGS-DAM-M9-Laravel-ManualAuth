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

Route::get('/home', function() {
    return view('home');
});

Route::get('/login', 'LoginController@login');

Route::get('/register', function() {
    return view('auth.register');
});
