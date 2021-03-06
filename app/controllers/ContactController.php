<?php

class ContactController extends \BaseController {


	public function viewContact(){

		return View::make('contact')->with('title','Contact');
	}


	public function getContactUsForm(){

        //Get all the data and store it inside Store Variable
		$data = Input::all();

           //Validation rules
		$rules = array (
			//'name' => 'required|alpha',
			//'phone_number'=>'numeric|min:11',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required|min:25'
		);

       //Validate data
		$validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
		if ($validator -> passes()){

           //Send email using Laravel send function
			Mail::send('emails.contact', $data, function($message) use ($data)
			{
                 //email 'From' field: Get users email add and name
				//$message->from($data['email'] , $data['name']);
				$message->from($data['email']);
                 //email 'To' field: cahnge this to emails that you want to be notified.
				//$message->to('talhaqc@gmail.com', 'Talha')->cc('talha2012331008@gmail.com')->subject('Uniliver Building');
				$message->to('talha2012331008@gmail.com')->cc('talha2012331008@gmail.com')->subject('Uniliver Building');

			});

			return View::make('contact')->with('title','Home')->with('success','Your message has been sent');
		}else{
               //return contact form with errors
			return Redirect::to('/contact')->withErrors($validator)->with('title','Home');
		}
	}



}