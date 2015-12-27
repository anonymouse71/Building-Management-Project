<?php

class Flat extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];
	protected $table='flats';

	public function users(){
		return $this->hasMany('User','flat_id','id');
	}


	public function money(){
		return $this->hasMany('Money','flat_id','id');
	}
}