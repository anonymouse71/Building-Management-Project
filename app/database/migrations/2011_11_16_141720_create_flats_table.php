<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('flat_details');
			$table->string('rent_amount');
			$table->boolean('payment_status')->default(false);
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
		Schema::drop('flats');
	}

}
