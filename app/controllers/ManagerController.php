<?php

class ManagerController extends \BaseController {

//accept manager
	public function acceptManager($id)
	{
		 try{
		   if(UserInfo::find($id)->update(['owner_approve'=>'1'])){

			   $userData = User::find($id);
			   $data = ['email'=>$userData->email];
			   //send mail
			   Mail::send('emails.adminverify',$data,function($message) use ($data) {
				   $message->to($data['email'])->subject('Verified By Admin');
			   });
			   return Redirect::back()
				   ->with('success', "Member Added Sussessfully.");
		   }

		   else
			   return Redirect::back()
				   ->with('success', 'Some error occured. Try again.');
	   }
	   catch(Exception $e){
		   return Redirect::back()
			   ->with('error', 'Some error occured. Try again.');
	   }


	

	}

}