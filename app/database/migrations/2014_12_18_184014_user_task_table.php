<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTaskTable extends Migration {

	public function up()
	{
		#pivot table creation and generation of fk
		Schema::create('users_task', function($table){
			#one to many relationship - one user can have many tasks
			$table->integer('user_id')->unsigned();
			$table->integer('task_id')->unsigned();
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('task_id')->references('id')->on('tasks'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_task');
	} 

}
