<?php

class Announce extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $table= 'announces';

	// Don't forget to fill this array
	protected $fillable = [];



}