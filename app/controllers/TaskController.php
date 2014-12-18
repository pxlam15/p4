<?php

class TaskController extends BaseController{

	public function createTask(){
		
		$task = new Task();
		/*
		$task->title = '';
		$task->dateCreated = '';
		$task->dateDue = '';
		$task->title = '';
		$task->status == False;
		*/
		$task->save();

		return View::make('hello');
	}

	public function toDo(){
		$tasks = DB::table('tasks') -> where('status', '<', 1) ->Get();

		foreach($tasks as $task){
			echo $task->title.'<br>';
		}
	}

	public function completed(){
		$tasks = DB::table('tasks') -> where('status', '>', 0) ->Get();

		foreach($tasks as $task){
			echo $task->title.'<br>';
		}
	}

	public function listAll(){
		$tasks = Task::all();

	    # Make sure we have results before trying to print them...
	    if($tasks->isEmpty() != TRUE) {

	        foreach($tasks as $task) {
	            echo $task->title.'<br>';
	        }
	    }
	    else {
	        return 'No Task Created Yet';
	    }
	}

	public function delete(){

	}

}