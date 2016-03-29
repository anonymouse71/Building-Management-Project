<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, HasRole;
     use Messagable;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $guarded = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	//Userinfo Model
	public function userInfo(){
		return $this->hasOne('UserInfo','user_id','id');
	}


    //for log system
	public function logs(){
		return $this->hasMany('Logger','user_id','id');
	}

	//for the flat system
	public function flats(){
		return $this->belongsTo('Flat','flat_id','id');
	}


// In your User model - 1 User has Many Notifications
	public function notifications()
	{
		return $this->hasMany('Notification');
	}


	//Worker Model
	public function workers(){
		return $this->hasOne('Worker','user_id','id');
	}

}
