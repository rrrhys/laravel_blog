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
	return View::make('hello');
});

Route::get('register','UserController@create');
Route::get('users', 'UserController@getIndex');
Route::post('signin','SessionController@create');
Route::get('signout','SessionController@destroy');
Route::post('register','UserController@store');
//Route::get('users',function(){
//	return 'Users!';
//});