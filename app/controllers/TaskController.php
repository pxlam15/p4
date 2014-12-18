<?php

class TaskController extends BaseController{

	public function __construct() {
		parent::__construct();
		$this->beforeFilter('auth');
	}

	public function createTask(){
		$task = new Task();
		
		$task->increments('id');
		#title is user input of their "todo"
		$task->title = '';
		#$task->dateCreated = '';
		#$task->dateDue = '';
		$task->save();

		return View::make('hello');
	}

	public function listAll(){
		$tasks = Task::all();

	    # Make sure we have results before trying to print them...
	    if($tasks->isEmpty() != TRUE) {

	        foreach($tasks as $task) {
	        	#if statement - to grey out those accomplished and bold if not
	            echo $task->title.'<br>';
	        }
	    }
	    else {
	        return 'No Task Created Yet';
	    }
	}

	public function showToDo(){
		#$user = 
		$tasks = DB::table('tasks') -> where('status', '<', 1) ->Get();

		foreach($tasks as $task){
			echo $task->title.'<br>';
		}
	}

	public function showCompleted(){
		$tasks = DB::table('tasks') -> where('status', '>', 0) ->Get();

		foreach($tasks as $task){
			echo $task->title.'<br>';
		}
	}

	public function edit(){
		try {
			$tag = Tag::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/tag')->with('flash_message', 'Tag not found');
		}

		$tag->name = Input::get('name');
		$tag->save();

		return Redirect::action('TaskController@listAll')->with('flash_message','Your tag has been saved.');
	}

	public function delete(){

	}

}