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
	#Home Page Here/Sign In/Log In Page
	return View::make('index');
});

#create new tasks
Route::get('/create', 'UserController@preCreate');
Route::post('/create', 'UserController@postCreate');

#read completed tasks
Route::get('/list', 'UserController@readAll');
Route::get('/list/complete', 'UserController@readCompletedTask');
Route::get('/list/incomplete', 'UserController@readIncompleteTask');

#edit and delete
Route::get('/edit_task', 'UserController@editTask');
Route::get('/delete_task', 'UserController@deleteTask');