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
			->orWhere('type','=','admin')
			->count();
		return $countNoti;
	}

//admin notification list
	public static function adminNoty(){
		$countNoti = Notification::where('type','=','manager_request')
			->orWhere('type','=','admin')
			->orderBy('created_at','desc')
			->paginate(5);
		return $countNoti;
	}





	//manager notification count
	public static function managerNcount(){
		$countNoti = Notification::where('type','=','announce')
			//  ->OrWhere('flat_id','=',Auth::user()->flat_id)
			->orWhere('type','=','user_request')
			->orderBy('created_at','desc')
			->count();
		return $countNoti;
	}

//manager notification list
	public static function managerNoty(){
		$countNoti = Notification::where('type','=','announce')
			//  ->OrWhere('flat_id','=',Auth::user()->flat_id)
			->orWhere('type','=','user_request')
			->orderBy('created_at','desc')
			->paginate(5);
		return $countNoti;
	}





	//user notification count
	public static function userNcount(){
		$countNoti =Notification::where('type','=','announce')
			//  ->OrWhere('flat_id','=',Auth::user()->flat_id)
			->count();
		return $countNoti;
	}

	//user notification list
	public static function userNoty(){
		$countNoti = Notification::where('type','=','announce')
			//  ->OrWhere('flat_id','=',Auth::user()->flat_id)
			->orderBy('created_at','desc')
			->paginate(5);
		return $countNoti;
	}





	//worker notification count
	public static function workerNcount(){
		$type = Worker::where('worker_type','=',Auth::user()->workers->worker_type)->pluck('worker_type');
		$countNoti = Notification::where('type','=',$type)
			->orderBy('created_at','desc')
			->count();
		return $countNoti;
	}




//worker notification list
	public static function workerNoty(){
		$type = Worker::where('worker_type','=',Auth::user()->workers->worker_type)->pluck('worker_type');
		$countNoti = Notification::where('type','=',$type)
			->orderBy('created_at','desc')
			->paginate(5);
		return $countNoti;
	}





	public static function zeroToOne($id, $nCount){
		//User::where('id','=',$id)
		//	->update(['notify'=> 'n']);
		$users = User::where('id', $id)->first();
		$users->notify ='n';
		$users->noty_count = $nCount;
		$users->save();
	}




}
