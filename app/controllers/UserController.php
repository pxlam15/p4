<?php

class UserController extends BaseController{

	
	public function __construct() {
		parent::__construct();
		/*
		$this->beforeFilter('guest',
			array(
				'only' => array('getLogin', 'getSignup')
			));
		*/
	}
	
	public function index(){
		return View::make('user-home');
	}

	public function preCreate(){
		return View::make('add-task');
	}

	public function postCreate(){
		$task = new Task();
		$task->taskDescription = input::except('subtasks'); #need to make task in blade
		$task->save();

		foreach($Input::get('subtasks') as $task) {
 		   $task->subtask()->(task::find($task));
		}

		return Redirect::action('UserController@index')->with('flash_message','Your book has been added.');
	}

	public function readCompletedTask(){
		$tasks = DB::table('tasks') -> where('status', '>', 0) ->Get();

		foreach($tasks as $task){
			echo $task->title.'<br>';
		}
	}

	public function readIncompleteTask(){
		$tasks = DB::table('tasks') -> where('status', '<', 1) ->Get();

		foreach($tasks as $task){
			echo $task->title.'<br>';
		}
	}

	public function readAll(){
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

	public function editTask(){
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


	public function deleteTask(){

	}

		
}
