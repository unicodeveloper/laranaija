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

Route::get('/', function()
{
  return view('welcome');
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

Route::resource('demo/users', 'HomeController@index');




Route::get('about', function(){
   return view('about');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
