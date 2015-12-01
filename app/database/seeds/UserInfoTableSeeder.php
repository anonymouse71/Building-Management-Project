<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserInfoTableSeeder extends Seeder {

	public function run()
	{
		$userInfo = [
			[
				'user_id'   =>'1',


				'activation' =>true,
				'activation_key' => null,
				'first_login' => true,
				'owner_status' => true,
				'owner_approve' => 1,
				'recovery_code' => null,

				'fullName' => 'ABU TALHA(admin)',
				'father' => 'Md. Maidul Islam',
				'mother' => 'Most.Ambia Begum',
				'father_contact' => '0192423466',
				'father_occup' => 'job',
				'mother_contact' => '0193428566',
				'mother_occup' => 'Housewife',
				'gender' => 'male',
				'date_of_birth' => '1993-06-28',

				'phone' => '98075355',
				'fb_account' => 'www.fb.com/talha08',

				'division' =>'Rangpur',
				'district' =>'kurigram',
				'sub_district' => 'Kurigram Sadar',
				'village' => 'Mondol Para',
				'house' => '12/124,yqw,yr',
				'city_corpo' => false,


				'study_level' => 'nai',
				'reg' => null,
				'institute' => null,
				'department' => null,
				'session' => null,
				'cgpa' => null,


				'avatar_url' => 'uploads/image/defaultAvatar.png',
				'icon_url'     => 'uploads/image/defaultAvatar.png',


				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			],








			[
				'user_id'   =>'2',


				'activation' =>true,
				'activation_key' => null,
				'first_login' => true,
				'owner_status' => true,
				'owner_approve' => 1,
				'recovery_code' => null,

				'fullName' => 'ABU TALHA(owner)',
				'father' => 'Md. Maidul Islam',
				'mother' => 'Most.Ambia Begum',
				'father_contact' => '0192423466',
				'father_occup' => 'job',
				'mother_contact' => '0193428566',
				'mother_occup' => 'Housewife',
				'gender' => 'male',
				'date_of_birth' => '1993-06-28',

				'phone' => '98075355',
				'fb_account' => 'www.fb.com/talha08',

				'division' =>'Rangpur',
				'district' =>'kurigram',
				'sub_district' => 'Kurigram Sadar',
				'village' => 'Mondol Para',
				'house' => '12/124,yqw,yr',
				'city_corpo' => 'yes',


				'study_level' => 'nai',
				'reg' => null,
				'institute' => null,
				'department' => null,
				'session' => null,
				'cgpa' => null,


				'avatar_url' => 'uploads/image/defaultAvatar.png',
				'icon_url'     => 'uploads/image/defaultAvatar.png',


				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			],



			[
				'user_id'   =>'3',


				'activation' =>true,
				'activation_key' => null,
				'first_login' => true,
				'owner_status' => true,
				'owner_approve' => 1,
				'recovery_code' => null,

				'fullName' => 'ABU TALHA(member)',
				'father' => 'Md. Maidul Islam',
				'mother' => 'Most.Ambia Begum',
				'father_contact' => '0192423466',
				'father_occup' => 'job',
				'mother_contact' => '0193428566',
				'mother_occup' => 'Housewife',
				'gender' => 'male',
				'date_of_birth' => '1993-06-28',

				'phone' => '98075355',
				'fb_account' => 'www.fb.com/talha08',

				'division' =>'Rangpur',
				'district' =>'kurigram',
				'sub_district' => 'Kurigram Sadar',
				'village' => 'Mondol Para',
				'house' => '12/124,yqw,yr',
				'city_corpo' => false,


				'study_level' => 'nai',
				'reg' => null,
				'institute' => null,
				'department' => null,
				'session' => null,
				'cgpa' => null,


				'avatar_url' => 'uploads/image/defaultAvatar.png',
				'icon_url'     => 'uploads/image/defaultAvatar.png',


				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			],





		];

		DB::table('userinfo')->insert($userInfo);
	}

}