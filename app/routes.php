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
	#Home Page Here
	return View::make('hello');
});


Route::post('/create', function()
{
	return View::make('hello');
});

Route::post('/edit', function()
{
	return View::make('hello');
});

Route::get('/completed', 'TaskController@completed');

Route::get('/todo', 'TaskController@toDo');

Route::get('/view_all', 'TaskController@listAll');

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
