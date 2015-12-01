<?php

class AnnouncesController extends \BaseController {

	/**
	 * Display a listing of announces
	 *
	 * @return Response
	 */
	public function index()
	{
		$announces = Announce::all();

		return View::make('announces.index', compact('announces'))->with('title',"Announce");
	}

	/**
	 * Show the form for creating a new announce
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('announces.create')->with('title',"Announce");
	}

	/**
	 * Store a newly created announce in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
			'details' => 'required',

		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator)->with('title',"Announce");
		}

		$announce= new Announce;


		$announce->details = $data['details'];


		if($announce->save()){
			return Redirect::route('announces.index')->with('success',"Announce Updated Successfully")->with('title',"Announce");
		}else{
			return Redirect::route('announces.index')->with('error',"Something went wrong.Try again")->with('title',"Announce");
		}
	}

	/**
	 * Display the specified announce.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$announce = Announce::findOrFail($id);

		return View::make('announces.show', compact('announce'))->with('title',"Announce");
	}

	/**
	 * Show the form for editing the specified announce.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$announce = Announce::find($id);

		return View::make('announces.edit', compact('announce'))->with('title',"Edit Announce");
	}

	/**
	 * Update the specified announce in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$announce= Announce::find($id);
		$rules = [
			'details' => 'required',

		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator)->with('title',"Announce");
		}




		$announce->details = $data['details'];


		if($announce->save()){
			return Redirect::route('announces.index')->with('success',"Announce Updated Successfully")->with('title',"Announce");
		}else{
			return Redirect::route('announces.index')->with('error',"Something went wrong.Try again")->with('title',"Announce");
		}
	}

	/**
	 * Remove the specified announce from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Announce::destroy($id);

		return Redirect::route('announces.index')->with('title',"Announce");
	}

}
