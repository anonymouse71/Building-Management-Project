<?php

class WorkerTask extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'subject' => 'required',
		 'details' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $table= 'workers_task';

}