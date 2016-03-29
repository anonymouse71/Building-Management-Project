<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkersTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workers_task', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject');
			$table->text('details');
			$table->string('worker_type');
			$table->integer('flat_id')->nullable();
			$table->integer('user_id');
			$table->boolean('notify')->default(false);
			$table->boolean('status')->default(false);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workers_task');
	}

}
