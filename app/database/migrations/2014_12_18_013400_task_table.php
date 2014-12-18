<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function($table){

			//$table -> integer('id');
			$table -> increments('id');
			$table -> timestamps(); 	

			$table -> date('dateCreated');
			$table -> date('dateDue');
			$table -> string('title');
			$table -> boolean('status');

		});

		Schema::create('sub_tasks', function($table){
			$table -> increments('id');
			$table -> timestamps();

			$table -> string('name');

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
