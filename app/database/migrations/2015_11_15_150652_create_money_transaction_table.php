<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoneyTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('money_transaction', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->enum('type', array('credit', 'debit'));
			$table->string('method');
			$table->double('amount')->unsigned();
			$table->date('date');
			$table->integer('flat_id')->unsigned()->index();
			$table->timestamps();

			$table->foreign('flat_id')->references('id')->on('flats')->onUpdate('cascade')->onDelete('cascade');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('money_transaction');
	}

}
