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

Route::get('developers', 'DeveloperController@index');

Route::get('developers/create', 'DeveloperController@create');

Route::get('projects', 'ProjectController@index');

Route::get('projects/create', 'ProjectController@create');

Route::post('projects/create', 'ProjectController@store');


Route::get('about', function(){
   return View::make('about');
});