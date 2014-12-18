<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public function task(){
		return $this->belongsToMany('Task');
	}

	 public function updateTasks($new = array()) {

		foreach($new as $task) {
			if(!$this->tasks->contains($task)) {
				$this->tasks()->save(Tag::find($task));
			}
		}

		foreach($this->tasks as $task) {
			if(!in_array($task->pivot->task_id,$new)) {
				$this->tasks()->detach($task->id);
			}
		}
	}

	

}
