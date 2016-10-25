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
use App\User;

Route::get('/', function () {
    return view('welcome');
});

//$user= User::findOrFail(1);
//setcookie('user',$user->token);

//Container
//$this->app->bind(
//    Guard::class, ParameterGuard::class
//);

$this->app->bind(
    Guard::class, ParameterGuard::class
);

Route::group(['middleware' => 'manualauth'], function () {
    Route::get('/tasques', function () {
        return view('tasques');
    });
});


Route::get('/login', function () {
    return view('login');
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