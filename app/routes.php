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

Route::get('environment', function(){
   
   return gethostname();

});

Route::get('developers', 'DeveloperController@index');

Route::get('developers/create', 'DeveloperController@create');

Route::post('developers/create', 'DeveloperController@store');

Route::get('projects', 'ProjectController@index');

Route::get('projects/create', 'ProjectController@create');

Route::post('projects/create', 'ProjectController@store');

Route::get('admin', 'HomeController@index');

Route::get('admin/projects', 'HomeController@index');

Route::get('admin/projects/{id}', 'HomeController@approve');

Route::get('admin/developers', 'HomeController@showDevelopers');

Route::get('admin/developers/{id}', 'HomeController@devapprove');




Route::get('about', function(){
   return View::make('about');
});