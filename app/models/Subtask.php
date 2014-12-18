<?php

class Subtask extends Eloquent {
	
	protected $fillable = array('name');
	
	public function tasks() {	
		return $this->belongsToMany('Task');
	}

	public static function getIdNamePair() {
		$tags = Array();
		$collection = Subtask::all();

		foreach($collection as $task) {
			$tasks[$task->id] = $task->name;
		}

		return $tasks;

	}

}