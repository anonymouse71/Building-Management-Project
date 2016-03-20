<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntrustTableSeeder extends Seeder {

	public function run()
	{

		$admin = Role::find(1);
		$owner = Role::find(2);
		$member = Role::find(3);
		$worker = Role::find(4);

		$read = Permission::find(1);


		$admin->attachPermission($read);
		$owner->attachPermission($read);
		$member->attachPermission($read);
		$worker->attachPermission($read);

		$user1 = User::find(1);


		$user1->attachRole($admin);





	}

}