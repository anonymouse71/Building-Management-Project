<?php

class FlatsController extends \BaseController {

	/**
	 * Display a listing of flats
	 *
	 * @return Response
	 */
	public function index()
	{
		$flats = Flat::all();

		return View::make('flats.index', compact('flats'))->with('title',"Flat");
	}

	/**
	 * Show the form for creating a new flat
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('flats.create')->with('title',"Flat");
	}

	/**
	 * Store a newly created flat in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$data = Input::all();
		$validator = Validator::make($data, Flat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$flats = new Flat();

		$flats->name = $data['name'];
		$flats->flat_details = $data['flat_details'];



		if($flats->save()){
			return Redirect::route('flats.index')->with('success',"Log Inserted Successfully");
		}else{
			return Redirect::route('flats.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Display the specified flat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//$flat = Flat::findOrFail($id);

		//return View::make('flats.show', compact('flat'))->with('success',"Flat Added")->with('title',"Flat ");
	}

	/**
	 * Show the form for editing the specified flat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$flat = Flat::find($id);

		return View::make('flats.edit', compact('flat'))->with('success',"Flat Added")->with('title',"Flat");
	}

	/**
	 * Update the specified flat in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();
		$validator = Validator::make($data, Flat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$flats = Flat::find($id);

		$flats->name = $data['name'];
		$flats->flat_details = $data['flat_details'];



		if($flats->save()){
			return Redirect::route('flats.index')->with('success',"Log Inserted Successfully");
		}else{
			return Redirect::route('flats.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified flat from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Flat::destroy($id);

		return Redirect::route('flats.index')->with('success',"Flat Added")->with('title',"Flat ");
	}








}
