<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('welcome');
});

Route::get('/dashboard', function(){
	return "Welcome to this Dashboard";
});


Route::get('/developers', function(){
    return "Naija Laravel Developers";
});

Route::get('/projects', function(){
	return "Naija Laravel Projects";
});

Route::get('/about', function(){
   return "About Us";
});