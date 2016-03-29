<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemberController extends BaseController {



	public function index()
	{
		$members =	DB::table('users')
			->join('userinfo', 'users.id', '=', 'userinfo.user_id')
			->Where('userinfo.owner_status','=',1)
			->Where('userinfo.owner_approve','=',0)
			->Where('users.role_id','!=',4)
			->get();

		return View::make('members.index')
			->with('title', 'View All members')
			->with('members', $members);
	}













	public function viewDistributor(){
		$members = User::where('role_id', '=', 2)->get();
		return View::make('members.distributor')
			->with('members', $members)
			->with('title', "View All Owner");
	}



	public function viewClient(){
		$members = User::where('role_id', '=', '3')->get();
		return View::make('members.client')
			->with('members', $members)
			->with('title', "View All Members");
	}








	public function acceptManager($id)
	{

		if(UserInfo::find($id)->update(['owner_approve'=>'1'])){

			$userData = User::find($id);
			$data = ['email'=>$userData->email];
			//send mail
			Mail::send('emails.adminverify',$data,function($message) use ($data) {
				$message->to($data['email'])->subject('Verified By Admin');
			});
			return Redirect::route('dashboard')
				->with('success', "Member Added Sussessfully.");
		}

		else
			return Redirect::route('dashboard')
				->with('error', 'Some error occured. Try again.');

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
			return Redirect::route('members')->with('success', "The member has been deleted.");
		else
			return Redirect::route('members')->with('errors', 'Some error occured. Try again.');
	}





}