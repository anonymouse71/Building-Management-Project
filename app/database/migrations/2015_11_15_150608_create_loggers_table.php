<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoggersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loggers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('debit')->unsigned();
			$table->double('credit')->unsigned();


			$table->text('desc');
			$table->string('work');
			$table->date('date');

			$table->integer('user_id')->unsigned()->index();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loggers');
	}

}
