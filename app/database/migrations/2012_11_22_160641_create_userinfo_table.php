<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userinfo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();

//activation

			$table->boolean('activation');
			$table->string('activation_key')->nullable();
			$table->boolean('first_login');
			$table->boolean('owner_status')->nullable();
			$table->integer('owner_approve')->unsigned()->default(0)->nullable();
			$table->string('recovery_code',25)->nullable();
//personal
			$table->string('fullName', 40);
			$table->string('father');
			$table->string('mother');
			$table->string('father_contact');
			$table->string('mother_contact')->nullable();
			$table->string('father_occup');
			$table->string('mother_occup')->nullable();
			$table->enum('gender', array('Male'));
			$table->date('date_of_birth')->nullable();

//contact
			$table->string('phone');
			$table->string('fb_account')->nullable();


//Address
			$table->text('division')->nullable();
			$table->text('district')->nullable();
			$table->text('sub_district')->nullable();
			$table->text('village');
			$table->text('house')->nullable();
			$table->text('city_corpo');

//Acedemic
			$table->text('study_level')->nullable();
			$table->text('reg')->nullable();
			$table->text('institute')->nullable();
			$table->text('department')->nullable();
			$table->text('session')->nullable();
			$table->text('cgpa')->nullable();

//photos
			$table->string('avatar_url')->nullable();
			$table->string('icon_url')->nullable();
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
		Schema::drop('userinfo');
	}

}
