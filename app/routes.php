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
	//return View::make('hello');
	return "<h1> Welcome to LaraNaija ( The Home for Nigerian Laravel Developers ) </h1>";
});

Route::get('/dashboard', function(){
	return "Welcome to this Dashboard";
});
