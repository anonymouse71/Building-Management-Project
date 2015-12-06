<?php

class UserController extends \BaseController {

		public function create(){
		    	$flats= Flat::all()->lists('name', 'id');
		        return View::make('user.create',compact('flats'))->with('title','Register');

		}





	public function store(){
		$rules =[
			'email'                 => 'required|email|unique:users',
			'password'              => 'required|confirmed',
			'password_confirmation' => 'required',
			'user_name'             =>'required|unique:users',
			'role_id'	=>	'Required',
			'flat_id'	=>	'Required',
			'agree'	=>	'Required',
			//'g-recaptcha-response' => 'required|recaptcha',

		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput(Input::except('password', 'password_confirmation'));
		}else{

			$confirmation_code = str_random(30);

			$user = new User();

			$user->email = $data['email'];
			$user->user_name = $data['user_name'];
			$user->password = Hash::make($data['password']);
			$user->role_id        = Input::get('role_id');
			$user->flat_id        = Input::get('flat_id');



			if($user->save()){
				if($user->role_id == '2' ) {
					$role = Role::find(1);
					$user->attachRole($role);
				}

				else{
					$role = Role::find(3);
					$user->attachRole($role);
				}


				$user_info = new UserInfo();
				$user_info->user_id = $user->id;
				$user_info->activation = false;
				$user_info->first_login = false;
				$user_info->owner_status = true;


				//if($user->role_id == '3' ) {
				//	$user_info->owner_approve = 1;
				//}

				$user_info->activation_key = $confirmation_code;
				//set a default avatar
				$user_info->icon_url = 'uploads/image/defaultAvatar.png';
				$user_info->avatar_url = 'uploads/image/defaultAvatar.png';

				if($user_info->save()){
					//send a activation mail
					//genrate a activation key

					Mail::send('user.activation', ['confirmation_code'=>$confirmation_code],
						function($message) {
							$message->to(Input::get('email'))
								->subject('Verify your email address');
						});

					return Redirect::route('login')->with('success',"Your Account Created Successfully. We sent a Mail to your Email Address.Please verify your Email for login.");
				}else{
					return Redirect::back()->withInput()->withErrors($validation);
				}

			}else{
				return Redirect::back()->withInput()->withErrors($validation);
			}
		}
	}







	public function show(){
		return View::make('user.show')->with(['title'=>'Profile']);
	}


	public function allShow($id){
		$user= User::where('id','=',$id)->get();
		return View::make('user.allShow',compact('user'))->with(['title'=>'Profile']);
	}




	public function edit(){
              $users = Auth::user()->userInfo;

		   return View::make('user.edit')->with('title','Update Profile')
			->with('users',$users);

	}







	public function update(){
		$rules =[
			'fullName' => 'required',
			'father' => 'required',
			'mother' => 'required',
			'father_contact' => 'required',
			'father_occup' => 'required',
			'mother_contact' => 'required',
			'mother_occup' => 'required',
			'gender' => 'required',
			'date_of_birth' => 'required',

			'phone' => 'required',
			'fb_account' => 'required',

			'division' =>'required',
			'district' =>'required',
			'sub_district' => 'required',
			'village' => 'required',
			'house' => 'required',
			'city_corpo' => 'required',


			'study_level' => 'required',
			'reg' => 'required',
			'institute' => 'required',
			'department' => 'required',
			'session' => 'required',
			'cgpa' => 'required',
		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);



		if($validation->fails()){
			return Redirect::back()->withErrors($validation)
				->withInput();
		}else{
			$userInfo = UserInfo::where('id',$data['id'])
				->update(array(
					'fullName' => $data['fullName'],
					'father' => $data['father'],
					'mother' => $data['mother'],
					'father_contact' => $data['father_contact'],
					'father_occup' => $data['father_occup'],
					'mother_contact' => $data['mother_contact'],
					'mother_occup' => $data['mother_occup'],
					'date_of_birth' => $data['date_of_birth'],

					'phone' => $data['phone'],
					'fb_account' => $data['fb_account'],

					'division' => $data['division'],
					'district' => $data['district'],
					'sub_district' => $data['sub_district'],
					'village' => $data['village'],
					'house' => $data['house'],
					'city_corpo' => $data['city_corpo'],


					'study_level' => $data['study_level'],
					'reg' => $data['reg'],
					'institute' => $data['institute'],
					'department' => $data['department'],
					'session' => $data['session'],
					'cgpa' => $data['cgpa'],


					'first_login' => true,
				));


			if($userInfo){
				return Redirect::route('user.show')->with('success','profile updated successfully');
			}else{
				return Redirect::back()->withInput()->withErrors($validation);
			}
		}
	}







	public function uploadAvatarForm(){
		return View::make('user.avatar')->with(['title'=>'Avatar']);
	}



	public function uploadAvatar(){
		//add two extra fields to userinfo table
		//icon path & avatar path

		$rules = array(
			'image' => 'required|image|max:5000'
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::route('upload.avatar')
				->withErrors($validator) // send back all errors to the login form
				->withInput(); // send back the input (not the password) so that we can repopulate the form
		} else {

			if (Input::hasFile('image'))
			{
				$image = Input::file('image');

				//deleting previous file
				$prev_avatar_url = Auth::user()->userInfo->avatar_url;
				if($prev_avatar_url != 'uploads/image/defaultAvatar.png'){
					if (File::exists($prev_avatar_url)) {
						File::delete($prev_avatar_url);
					}
					$prev_icon_url = Auth::user()->userInfo->icon_url;
					if (File::exists($prev_icon_url)) {
						File::delete($prev_icon_url);
					}
				}

				$avatar_url = 'uploads/image/avatar/avatar-'.Auth::user()->id.'.jpg';
				$icon_url = 'uploads/image/icon/icon-'.Auth::user()->id.'.jpg';

				Image::make($image)->resize(200, 200)->save(public_path($avatar_url));
				Image::make($image)->resize(50, 50)->save(public_path($icon_url));

				$imageInfo = UserInfo::where('user_id',Auth::user()->id)
					->update(array(
						'avatar_url' => $avatar_url,
						'icon_url' => $icon_url
					));

				if($imageInfo){
					return Redirect::route('user.show')->with('success','avatar updated successfully');
				}else{
					return Redirect::back()->withInput()->withErrors($validator);
				}

			}else{

				return Redirect::route('upload.avatar')->with(['error'=>'image could not be uploaded']);
			}

		}

	}


  //Own flat member
 	public function member(){

		$all= Auth::user()->flat_id;
		$user = User::where('flat_id', '=', $all)
			 ->whereNotNull('flat_id')
			->get();
		return View::make('flats.members',compact('user'))->with('title','Flat Members');

	}


    //all member in the building
	public function allMember(){

		$user= User::where('flat_id', '!=', 0)->get();
		return View::make('flats.allMembers',compact('user'))->with('title','All Members');

	}

	//flat wise all member
	public function flatMember()
	{
		return $flat= Flat::lists('name','id');
		return $users = User::lists('flat_id','id');


	}

}