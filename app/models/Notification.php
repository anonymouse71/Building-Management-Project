<?php
use Carbon\Carbon;
class Notification extends \Eloquent {

	protected $table='notifications';

	protected $fillable   = [ 'user_id', 'type', 'subject', 'body'];

	public function user()
	{
		return $this->belongsTo('User');
	}


	/*
//for show all notifation to user
	public static function allNotify()
	{
		$notify =	Notification::where('flat_id','=', Auth::user()->flat_id)
			->where('is_read', '=', 0)
			->orWhere('user_id','=', Auth::user()->id)
			->orWhere('user_id','=', Null)->get();
		return $notify;
	}



	public static function count(){
		$countNoti = Notification::where('flat_id','=', Auth::user()->flat_id)
			->where('is_read', '=', 0)
			->orWhere('user_id','=', Auth::user()->id || Null)
			->orWhere('user_id','=', Null)
			->count();

		return $countNoti;
	}

	*/





	//admin notification count
	public static function adminNcount(){
		$countNoti = Notification::where('type','=','manager_request')
			->count();
		return $countNoti;
	}

//admin notification list
	public static function adminNoty(){
		$countNoti = Notification::where('type','=','manager_request')
			 ->orderBy('created_at','desc')
			->get();
		return $countNoti;
	}





	//manager notification count
	public static function managerNcount(){
		$countNoti = Notification::where('flat_id','=',Auth::user()->flat_id)
			                     ->orWhere('type','=','announce')
			                     ->orWhere('type','=','user_request')
			                    ->count();
		return $countNoti;
	}

//manager notification list
	public static function managerNoty(){
		$countNoti = Notification::where('flat_id','=',Auth::user()->flat_id)
			->orWhere('type','=','announce')
			->orWhere('type','=','user_request')
			->orderBy('created_at','desc')
			->get();
		return $countNoti;
	}





	//user notification count
	public static function userNcount(){
		$countNoti = Notification::where('flat_id','=',Auth::user()->flat_id)
			->orWhere('type','=','announce')
			->count();
		return $countNoti;
	}

	//user notification list
	public static function userNoty(){
		$countNoti = Notification::where('flat_id','=',Auth::user()->flat_id)
			->orWhere('type','=','announce')
			->orderBy('created_at','desc')
			->get();
		return $countNoti;
	}


	public static function zeroToOne($id){
		User::where('id','=',$id)
			->update(['notify'=> 'n']);

	}




}
