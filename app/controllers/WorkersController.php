<?php

class WorkersController extends \BaseController {

	//Worker index
	// worker can see who and what type of work send by user
	public function index()
	{
		$workers = Worker::all();

		return View::make('workers.index', compact('workers'))->with('title','User Problem');
	}


	//for worker individual problem show
	public function show()
	{
		$workers = Worker::where('user_id',Auth::user()->id)->get();

		return View::make('workers.show', compact('workers'))->with('title','Your  Problem list');
	}



   //thats for User who wants to create a eork for the worker
	//for user view
	public function create()
	{
		return View::make('workers.create')->with('title','Say your Problem to the building Worker: ');
	}






	//message/problem store
	//which is covered byt user
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Worker::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$worker = new Worker();

		$worker->subject = $data['subject'];
		$worker->details = $data['details'];
		$worker->flat_id = Auth::user()->flat_id;
		$worker->user_id = Auth::user()->id;

		if($worker->save()){
			return Redirect::route('workers.create')->with('success',"Problem sent  successfully");
		}else{
			return Redirect::route('workers.create')->with('error',"Something went wrong.Try again");
		}



	}





//work status change, work done or not
//for changing  status
	public function changeStatus($id)
	{

		try{
			$worker = Worker::find($id);
			$worker->status = true;

			if($worker->save()){
				$notify= new Notification();
				$notify->type='worker';
				$notify->flat_id= Auth::user()->flat_id;
				$notify->user_id= Null;
				$notify->role_id= 4;
				$notify->subject='Work Status Change';
				$notify->body= 'Work not completed perfectly';
				$notify->is_read=0;
				if($notify->save()){
					User::where('role_id',4)->update(['notify'=>'y']);

					return Redirect::back()->with('success',"Task complete successfully.");
				}
				else{
					return Redirect::back()->with('error',"Something went wrong.");
				}
			}
			else{
				return Redirect::back()->with('error',"Something went wrong.");
			}
		}
		catch(Exception $e){
			return Redirect::back()->with('error',"Something went wrong.");
		}

	}






//work work not perfectly done then if user
//for changing  status
	public function complain($id)
	{

		try{

			$worker = Worker::find($id);
			$worker->notify = true;

			if($worker->save()){
				$notify= new Notification();
				$notify->type='admin';
				$notify->flat_id= Auth::user()->flat_id;
				$notify->user_id= Null;
				$notify->role_id= 1;
				$notify->subject='Complain from flat members/managers';
				$notify->body= 'Work not completed perfectly,Please do something';
				$notify->is_read=0;
				if($notify->save()){
					User::where('role_id',1)->update(['notify'=>'y']);

					return Redirect::back()->with('success',"Complain Sent successfully.");
				}
				else{
					return Redirect::back()->with('error',"Something went wrong.");
				}

			}
			else{
				return Redirect::back()->with('error',"Something went wrong.");
			}

		}
		catch(Exception $e){
			return Redirect::back()->with('error',"Something went wrong.");
		}

	}




	//for delete

	public function destroy($id)
	{
		Worker::destroy($id);

		return Redirect::route('workers.index');
	}

}
