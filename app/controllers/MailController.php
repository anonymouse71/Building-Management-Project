<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MailController extends \BaseController {



	public function create()
	{
		return View::make('mail.create')->with('title',"Mail Create");
	}


	/**
	 * @return mixed
     */
	public function mailSender()
	{

		$rules = [
			'details' => 'required',
			'subject' => 'required',
			'date' => 'required',

		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else {


			$subject = $data['subject'];
			$details = $data['details'];
			$date = $data['date'];


			//$user_email= 'talha2012331008@gmail.com';

			$time = Carbon::now()->addMinutes($date);
			//  $time = Carbon::now()->->addDay($date);
			$today = Carbon::now();
			$user = User::where('role_id', '=', 2)->get();

			foreach ($user as $users){
					$user_email = $users->email;

					Mail::later($time, 'mail.sample', ['details'=>$details],
						function ($message) use ($user_email, $subject) {
						$message->from('talhaqc@gmail.com')->to($user_email)->subject($subject);
					});
			}

			return Redirect::back()->with('success',"Everything Fine");
		}



	}







}