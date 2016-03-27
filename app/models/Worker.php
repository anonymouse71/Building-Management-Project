<?php

class Worker extends \Eloquent {
	protected $fillable = [];

	protected $table= 'worker';

   //user
	public function user(){
		return $this->belongsTo('User','user_id','id');
	}

	//types
	protected $types = [
			''            => '----Select----',
			'Electrician' => 'Electrician',
			'Plumber'     => 'Plumber',
			'Cleaner'     => 'Cleaner'
		];
}