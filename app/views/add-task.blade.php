@extends('_master')

@section('title')
	To Do Checklist
@stop


@section('content')
	<h1>Add Task</h1>

	{{ Form::open(array('url' => '/')) }}

	    Name<br>
	    {{ Form::text('Name') }}<br><br>

	    Task:<br>
	    {{ Form::text('Task') }}<br><br>

	    {{ Form::submit('Submit') }}

	{{ Form::close() }}
@stop