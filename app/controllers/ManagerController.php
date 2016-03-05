<?php

class ManagerController extends \BaseController {

	/**
	 * This is the filter for normal flat members that can can be controlled by Manager
	 *
	 *
	 * @return the unapproval normal user list
	 */
	public function waitingMember()
	{
		$members = UserInfo::join('users','userinfo.id','=','users.id')
		    ->Where('userinfo.activation','=',true)
			->Where('userinfo.owner_status','=',0)
			->Where('userinfo.owner_approve','=',0)
			->Where('users.flat_id','=',Auth::user()->flat_id)
			->paginate(10);

		return View::make('manager.index')
			->with('title', 'View All waiting members')
			->with('members', $members);
	}



	public function acceptMember($id)
	{

		if(UserInfo::find($id)->update(['owner_approve'=>'1'])){

			$userData = User::find($id);
			$data = ['email'=>$userData->email];
			//send mail
			Mail::send('emails.adminverify',$data,function($message) use ($data) {
				$message->to($data['email'])->subject('Verified By Flat Manager');
			});
			return Redirect::route('manager.index')
				->with('success', "Member Added Sussessfully.");
		}

		else
			return Redirect::route('manager.index')
				->with('error', 'Some error occured. Try again.');

	}


}