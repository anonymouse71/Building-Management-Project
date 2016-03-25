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
	public function show($id)
	{
		$worker = Worker::findOrFail($id);

		return View::make('workers.show', compact('worker'));
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

			$worker->save();

			return Redirect::back()->with('success',"Status Change.");
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
