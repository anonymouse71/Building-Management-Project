<?php

class WorkersController extends \BaseController {

	//Worker index
	public function index()
	{
		$workers = Worker::all();

		return View::make('workers.index', compact('workers'))->with('title','User Need');
	}


	//for worker individual problem show
	public function show($id)
	{
		$worker = Worker::findOrFail($id);

		return View::make('workers.show', compact('worker'));
	}




	//for user view
	public function create()
	{
		return View::make('workers.create')->with('title','Say your Problem to the building Worker: ');
	}






	//message/problem store
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
			return Redirect::route('workers.create')->with('success',"Message Sent Successfully");
		}else{
			return Redirect::route('workers.create')->with('error',"Something went wrong.Try again");
		}



	}






//for changing  status
	public function statusChange($id)
	{
		try{
			$worker = Worker::findOrFail($id);

			if($worker->status== false){
				$worker->update(['status'=>true]);
			}
			else{
				$worker->update(['status'=>false]);
			}

			return Redirect::route('workers.index')->with('success',"Status Change.");
		}
		catch(Exception $e){
			return Redirect::route('workers.index')->with('error',"Something went wrong.");
		}

	}





	//for delete

	public function destroy($id)
	{
		Worker::destroy($id);

		return Redirect::route('workers.index');
	}

}
