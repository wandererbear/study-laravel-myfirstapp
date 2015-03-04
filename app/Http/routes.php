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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// Lesson 4-5
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

// Lesson 6
get('songs', 'SongsController@index');
get('songs/{id}', 'SongsController@show');

// Lesson 7
get('songsdb', 'SongsControllerDB@index');
get('songsdb/{id}', 'SongsControllerDB@show');

// teddy "we can use get() insteadof Route::get();"
// Route::get('/', function(){
// 	return 'Home page';
// });