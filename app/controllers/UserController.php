<?php

class UserController extends BaseController{

	
	public function __construct() {
		parent::__construct();

		$this->beforeFilter('guest',
			array(
				'only' => array('getLogin', 'getSignup')
			));
	}
	

	public function preCreate(){
		return View::make('add-task');
	}

	public function postCreate(){
		$task = new Task();
		$task->taskDescription = input::Get('taskTitle'); #need to make task in blade
		$task->save();
		#make connection between task description and user
		$user = input::Get('Name');
		$user->task()->associate($task);
		$user->save();

		$users = collection::all();
		$tasks = $users->task;
		foreach($tasks as $task) {
 		   echo $task->taskDescripton."<br>";
		} 
	

	}

	public function readTask(){

	}

	public function editTask(){

	}

	public function deleteTask(){

	}

		
}