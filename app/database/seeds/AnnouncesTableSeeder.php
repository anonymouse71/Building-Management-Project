<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AnnouncesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


			Announce::create([
  				'details'=>$faker->paragraph,
			]);

	}

}