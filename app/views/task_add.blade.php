@extends('_master')

@section('title')
	To Do Checklist: Add Task
@stop

@section('content')

	<form method = "POST" action = "/create">

		<label for='userName'> Username </label>
		<input type='text' name='userName'/> <br>

		<label for='password'> Password </label>
		<input type='password' name='password'/> <br>

		<input type = "Submit">

@stop