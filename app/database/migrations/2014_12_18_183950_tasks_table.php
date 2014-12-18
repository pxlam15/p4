<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TasksTable extends Migration {

	
	public function up()
	{
		Schema::create('tasks', function($table){

			$table -> increments('id');
			$table -> timestamps(); 	
			$table -> date('dateCreated');
			$table -> date('dateDue');
			$table -> string('title');
			#$table -> boolean('status');
			$table -> integer('status');
			

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}



