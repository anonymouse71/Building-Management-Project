<?php
use Carbon\Carbon;
class Notification extends \Eloquent {

	protected $table='notifications';

	protected $fillable   = [ 'user_id', 'type', 'subject', 'body'];

	public function user()
	{
		return $this->belongsTo('User');
	}

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

	public static function adminNcount(){
		$countNoti = Notification::where('type','=','manager_request')
			->count();
		return $countNoti;
	}


}
