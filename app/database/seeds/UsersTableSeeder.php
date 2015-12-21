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
				'name'   => 'Talha08',
				'role_id' =>'1',
				'flat_id' =>null,
				'notify' =>'y',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			],


			[
			'email'      => 'talhaqc@gmail.com',
			'password'   => Hash::make('a'),
			'name'   => 'Talha',
			'role_id' =>'2',
			'flat_id' =>'1',
				'notify' =>'y',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		],

			[
			'email'      => 'tanveer@gmail.com',
			'password'   => Hash::make('a'),
			'name'   => 'Bitla',
			'role_id' =>'3',
			'flat_id' =>'1',
				'notify' =>'y',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]

		];

		DB::table('users')->insert($users);
	}

}