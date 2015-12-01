<?php

class Money extends \Eloquent {
	protected $fillable = [];
	protected $table = 'money_transaction';

	public function flats(){
		return $this->belongsTo('Flat','flat_id','id');
	}

	public static function credit($id){
		return Money::where('flat_id',$id)->where('type','credit')->sum('amount');
	}

	public static function debit($id){
		return Money::where('flat_id',$id)->where('type','debit')->sum('amount');
	}
}