@extends('_master')

@section('title')
	To Do Checklist
@stop

@section('content')
	<link rel='stylesheet' href='/css/style 1.0.css' type='text/css'>
	<form method = "POST" action = "/sign-up">

		<label for='userName'> Username </label>
		<input type='text' name='userName'/> <br>

		<label for='password'> Password </label>
		<input type='password' name='password'/> <br>

		<input type = "Submit">
@stop