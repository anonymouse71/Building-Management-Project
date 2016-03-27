<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
			[
				'email'      => 'admin@gmail.com',
				'password'   => Hash::make('a'),
				
				'name'   => 'Admin',
				'role_id' =>'1',
				'flat_id' =>Null,
				'notify' =>'y',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			],


			[
			'email'      => 'manager@gmail.com',
			'password'   => Hash::make('a'),
			'name'   => 'Manager',
			'role_id' =>'2',
			'flat_id' =>'1',
				'notify' =>'y',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		],

			[
			'email'      => 'member@gmail.com',
			'password'   => Hash::make('a'),
			'name'   => 'Member',
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