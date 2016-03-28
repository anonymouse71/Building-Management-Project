<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('email')->unique();
			$table->string('name', 40);
			$table->string('password');
			$table->string('role_id');
			$table->integer('flat_id')->unsigned()->nullable();
			$table->foreign('flat_id')
				->references('id')->on('flats')
				->onDelete('cascade');
			$table->enum('notify', ['y', 'n'])->default('y');
			$table->string('noty_count')->default(0);
			$table->string('remember_token')->nullable();
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
		Schema::drop('users');
	}

}
