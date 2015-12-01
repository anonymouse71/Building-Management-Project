<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FlatsTableSeeder extends Seeder {

	public function run()
	{


		$flats = [


			'name' => 'A1',


			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')


		];
		DB::table('flats')->insert($flats);
	}

}
