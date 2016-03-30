<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemberController extends BaseController {


// for manager waiting list
	public function index()
	{

		$members = UserInfo::join('users','userinfo.id','=','users.id')
			->Where('userinfo.activation','=',true)
			->Where('userinfo.owner_status','=',1)
			->Where('userinfo.owner_approve','=',0)
			->Where('users.role_id','=',2)
			->paginate(10);

		return View::make('members.index')
			->with('title', 'View All members')
			->with('members', $members);
	}







//view all Manager
	public function viewDistributor(){
		$members = User::where('role_id', '=', 2)->get();
		return View::make('members.distributor')
			->with('members', $members)
			->with('title', "View All Owner");
	}




//View all members
	public function viewClient(){
		$members = User::where('role_id', '=', '3')->get();
		return View::make('members.client')
			->with('members', $members)
			->with('title', "View All Members");
	}













	public function varify($email){
		$varify = User::where('email','=',$email)->first();
		if(! is_null($varify)){
			if($varify->role_id==2){
				return $varify->owner_approve & $varify->varification_status;
			}else{
				return $varify->varification_status;
			}

		}else{
			return 0;
		}
	}




	public function mailRecover($code){
		$user = UserInfo::where('recovery_code','=',$code)->first();
		if(! is_null($user)){

			Auth::login($user);
			return View::route('user.edit')
				->with('title','Update Cridentials')
				->with('user',User::where('id','=',$user->id)->first());
		}else{
			return Redirect::route('members')
				->with('error', 'Recovery Failed.Try again');
		}
	}




	public function userDelete($id)
	{
		$member = User::findOrFail($id);
		if($member->delete())
			return Redirect::back()->with('success', "The member has been deleted.");
		else
			return Redirect::back()->with('errors', 'Some error occured. Try again.');
	}






//all waiting member
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


//accept member
	public function acceptMember($id)
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
				   ->with('error', 'Some error occured. Try again.');
	   }
	   catch(Exception $e){
		   return Redirect::back()
			   ->with('error', 'Some error occured. Try again.');
	   }


	}



}