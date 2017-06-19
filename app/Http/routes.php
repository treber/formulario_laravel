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
use App\User;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/login', 'LoginController@show');



/*Route::get('/home', 'HomeController@index');*/

Route::get('/home', 'DeniedController@index');



Route::post('/register', 'RegistedController@index');
Route::auth();