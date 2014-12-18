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

Route::get('/home', function()
{
	#User Home Page
	return View::make('user-home');
});


Route::post('/create', function()
{
	return View::make('hello');
});

Route::post('/edit', function()
{
	return View::make('hello');
});

Route::get('/completed', 'TaskController@showCompleted');

Route::get('/todo', 'TaskController@showToDo');

Route::get('/view_all', 'TaskController@listAll');

Route::get('/sign-up', 'UserController@preSignup');

Route::get('/log-in', 'UserController@preLogin');

Route::get('/sign-up-validating', 'UserController@postSignup');

/*
Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($results);

});
*/
