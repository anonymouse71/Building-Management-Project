<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
			[
				'email'      => 'talha@gmail.com',
				'password'   => Hash::make('a'),
				'user_name'   => 'Talha08',
				'role_id' =>'1',
				'flat_id' =>null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			],


			[
			'email'      => 'talhaqc@gmail.com',
			'password'   => Hash::make('a'),
			'user_name'   => 'Talha',
			'role_id' =>'2',
			'flat_id' =>'1',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		],

			[
			'email'      => 'tanveer@gmail.com',
			'password'   => Hash::make('a'),
			'user_name'   => 'Bitla',
			'role_id' =>'3',
			'flat_id' =>'1',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]

		];

		DB::table('users')->insert($users);
	}

}