<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntrustTableSeeder extends Seeder {

	public function run()
	{

		$admin = Role::find(1);
		$distributor = Role::find(2);
		$client = Role::find(3);

		$read = Permission::find(1);


		$admin->attachPermission($read);
		$distributor->attachPermission($read);
		$client->attachPermission($read);

		$user1 = User::find(1);


		$user1->attachRole($admin);





	}

}