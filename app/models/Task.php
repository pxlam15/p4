<?php

class Task extends Eloquent{
		
	public function user(){
		return $this->belongsTo('User');
	}

	public static function getIDNamePair(){
		$tasks = Array();

		$collection = Task::all();

		foreach($collection as $task) {
			$tasks[$task->id] = $task->name;
		}

		return $task;	

	}

	public function updateTasks($new = array()){
		foreach($new as $task) {
			if(!$this->tasks->contains($task)) {
				$this->tasks()->save(Task::find($task));
			}
		}
		
		foreach($this->tasks as $task) {
			if(!in_array($task->pivot->task_id,$new)) {
				$this->tasks()->detach($task->id);
			}
		}
	}

}