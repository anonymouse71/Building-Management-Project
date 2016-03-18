<?php

class ActivationController extends \BaseController {

	public function activate($confirmation_code)
	{
		if( ! $confirmation_code)
		{
			return Redirect::route('login')->with('error','invalid code given');
		}

		$user = UserInfo::where('activation_key',$confirmation_code)->first();
		if ($user != null)
		{
			$user->activation= true;
			$user->activation_key = null;
			$user->save();
			if($user->user->role_id == '2' ) {
				//for notification
				$notify = new Notification();
				$notify->type = 'manager_request';
				//if any problem occurs its here the next line
				$notify->flat_id = Input::get('flat_id');
				$notify->user_id = Null;
				$notify->role_id = Input::get('role_id');
				$notify->subject = 'Manager Approval Request';
				$notify->body = $user->email . 'waiting for approval';
				$notify->is_read = 0;
				$notify->save();
//for notification
			}
			else{
                 //for notification
					$notify= new Notification();
					$notify->type='user_request';
					$notify->flat_id= Input::get('flat_id');
					$notify->user_id= Null;
					$notify->role_id= Input::get('role_id');
					$notify->subject='User Approval Request';
					$notify->body= $user->email.'waiting for approval';
					$notify->is_read=0;
					$notify->save();
					//for notification
				}


			Auth::logout();
			return Redirect::route('login')->with('success','account activated successfully');
		}else{
			return Redirect::route('login')->with('error','error in validation');
		}


	}



	public function viewActivationRequest(){
		return View::make('user.activationRequest')->with(['title'=>'Activation']);
	}




	public function sendActivationLink(){
		$rules = array
		(
			'email' => 'required|exists:users,email'
		);

		$allInput = Input::all();
		$validation = Validator::make($allInput, $rules);

		if ($validation->fails())
		{
			return Redirect::back()
				->withInput()
				->withErrors($validation);
		} else
		{
			try{
				try{
					$userActivation = User::where('email',$allInput['email'])->with('UserInfo')->first();
				}catch(Exception $e){
					return Redirect::back()->with('error','something went wrong!');
				}
				if($userActivation != null){
					if ($userActivation->userInfo->activation){
						//return 'please activate';
						return Redirect::route('login')->with('success','you are already activated!. please login below');
					}
				}
				else{
					return Redirect::back()->with('warning','you are not registered!');
				}
			}catch (Exception $ex){
				return Redirect::back()->with('error','something went wrong!');
			}

			$credentials = array
			(
				'email'    => Input::get('email')
			);

			$confirmation_code = str_random(30);

			$affectedRows = UserInfo::where('user_id',$userActivation->userInfo->user_id)->update(array('activation_key' => $confirmation_code));
			if($affectedRows != null)
			{
				try{
					Mail::send('user.activation', ['confirmation_code'=>$confirmation_code, 'fullName'=>$userActivation->userInfo->fullName], function($message) {
						$message->to(Input::get('email'))
							->subject('Verify your email address');
					});
					return Redirect::route('activationRequest')->with(['success'=>'email sent!']);
				}catch (Exception $ex){
					return Redirect::back()->with(['error'=>'sending email failed!']);
				}

			} else
			{
				return Redirect::back()
					->withInput()
					->withErrors('Error in Email Address or Password.');
			}
		}


	}

}