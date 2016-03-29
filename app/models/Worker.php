<?php

class Worker extends \Eloquent {
	protected $fillable = [];

	protected $table= 'worker';

   //user
	public function user(){
		return $this->belongsTo('User','user_id','id');
	}

/* No need for this section

	public static  function changeType($id){
		//This is for Updating worker_type in  WorkerTask table
		 $worker= Worker::where('user_id',$id)->pluck('worker_type');
		$worker_type = WorkerTask::where('worker_type','=',$worker)->pluck('worker_type');

		return $worker_type;

	}
*/

}