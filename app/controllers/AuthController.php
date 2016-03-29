<?php

class AuthController extends \BaseController {

	public function login(){
		return View::make('auth.login')
			->with('title', 'Login');
	}



	public function doLogin()
	{
		$rules = array
		(
			'email'    => 'required',
			'password' => 'required'
		);
		$allInput = Input::all();
		$validation = Validator::make($allInput, $rules);

		try{
			$userActivation = User::where('email',$allInput['email'])
				//->where('password',Hash::make($allInput['password']))
				->with('UserInfo')->first();
			if (!$userActivation->userInfo->activation){
				//return 'please activate';
				$route = route('activationRequest');
				$button =  '<a href="'.$route.'">Resend mail</a>';
				return Redirect::back()->with('warning','please check your mailbox to activate your account
							OR '.$button);
			}
		}catch (Exception $ex){
			return Redirect::back()->with('warning','you are not registered!');
		}

		if ($validation->fails())
		{

			return Redirect::route('login')
				->withInput()
				->withErrors($validation);
		} else
		{

			$credentials = array
			(
				'email'    => Input::get('email'),
				'password' => Input::get('password')
			);

			if (Auth::attempt($credentials))
			{
				if(Auth::user()->id == 4){
					return Redirect::route('workerTask.index');
				}
				elseif(!$userActivation->userInfo->first_login) {

					return Redirect::route('user.edit');
				}
				else
				{
					return Redirect::route('dashboard');
				}

			} else
			{
				return Redirect::route('login')
					->withInput()
					->withErrors('Error in Email Address or Password.');
			}
		}
	}



	public function logout(){
		Auth::logout();

		return Redirect::route('index')
			->with('success',"You are successfully logged out.");
	}




	public function dashboard(){
		$log= DB::table('loggers')
			->where('user_id','=',Auth::user()->id)
			->orderBy('date','desc')
			->take(6)
			->get();
		return View::make('dashboard',compact('log'))
			->with('title','Dashboard');
	}




	public function changePassword(){
		return View::make('auth.changePassword')
			->with('title',"Change Password");
	}

	public function doChangePassword(){
		$rules =[
			'password'              => 'required|confirmed',
			'password_confirmation' => 'required'
		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}else{
			$user = Auth::user();
			$user->password = Hash::make($data['password']);

			if($user->save()){
				Auth::logout();
				return Redirect::route('login')
					->with('success','Your password changed successfully.');
			}else{
				return Redirect::route('dashboard')
					->with('error',"Something went wrong.Please Try again.");
			}
		}
	}






}