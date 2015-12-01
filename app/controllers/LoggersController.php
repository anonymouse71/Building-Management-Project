<?php

class LoggersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /loggers
	 *
	 * @return Response
	 */
	public function index()
	{

		return View::make('loggers.index')
			->with('logs',Logger::where('user_id',Auth::user()->id)->get())
			->with('title',"Logs");
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /loggers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('loggers.create')
			->with('title','Create New Log');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /loggers
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
			'desc' => 'required',

		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$log = new Logger();

		$log->desc = $data['desc'];
		$log->work = $data['work'];
		$log->debit = $data['debit'];
		$log->credit = $data['credit'];
		$log->date = $data['date'];
		$log->user_id = Auth::user()->id;



		if($log->save()){
			return Redirect::route('log.index')->with('success',"Log Inserted Successfully");
		}else{
			return Redirect::route('log.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Display the specified resource.
	 * GET /loggers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /loggers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{


			$log = Logger::findOrFail($id);
			return View::make('loggers.edit')
				->with('log',$log)
				->with('title','Edit Log');
		}catch(Exception $ex){
			return Redirect::route('log.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /loggers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
			'desc' => 'required',

		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$log = Logger::find($id);

		$log->desc = $data['desc'];
		$log->work = $data['work'];
		$log->debit = $data['debit'];
		$log->credit = $data['credit'];
		$log->date = $data['date'];
		$log->user_id = Auth::user()->id;


		if($log->save()){
			return Redirect::route('log.index')->with('success',"Log Inserted Successfully");
		}else{
			return Redirect::route('log.index')->with('error',"Something went wrong.Try again");
		}


	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /loggers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Logger::destroy($id)){
			return Redirect::route('log.index')->with('success',"Log deleted Successfully.");
		}else{
			return Redirect::route('log.index')->with('error',"Something went wrong.Try again");
		}
	}



}