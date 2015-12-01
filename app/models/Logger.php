<?php

class Logger extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'loggers';
	protected $with = ['user'];

	public function user(){
		return $this->belongsTo('User','user_id','id');
	}
}