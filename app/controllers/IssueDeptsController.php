<?php

class IssueDeptsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /issuedepts
	 *
	 * @return Response
	 */
	public function index()
	{
		$issuedepts = IssueDept::all();
		return View::make('issue_depts.index')
			->with('issuedepts',$issuedepts)
			->with('title',"Issue Departments");
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /issuedepts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('issue_depts.create')
			->with('title',"Create Issue Department");
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /issuedepts
	 *
	 * @return Response
	 */
	public function store()
	{
		$messages = [
			'name.required' => 'Department Name required.',
			'name.unique_with' => 'Department Name already exists.',

		];


		$data = Input::all();

		$validator = Validator::make($data,IssueDept::rules(),IssueDept::messages());
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$role = new IssueDept();

		$role->name = $data['name'];
		if($role->save()){

			return Redirect::route('issuedept.index')->with('success','Issue Department Created Successfully.');
		}else{
			return Redirect::route('issuedept.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /issuedepts/{id}
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
	 * GET /issuedepts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try{
			$issuedept = IssueDept::findOrFail($id);
			return View::make('issue_depts.edit')
				->with('issuedept',$issuedept)
				->with('title','Edit Issue Department');
		}catch(Exception $ex){
			return Redirect::route('issuedept.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /issuedepts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();

		$validator = Validator::make($data,IssueDept::rules($id),IssueDept::messages());

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$issuedept = IssueDept::find($id);

		$issuedept->name = $data['name'];
		if($issuedept->save()){

			return Redirect::route('issuedept.index')->with('success','Issue Department Updated Successfully.');
		}else{
			return Redirect::route('issuedept.index')->with('error','Something went wrong.Try Again.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /issuedepts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{


		$dept = IssueDept::find($id);


		if($dept->delete()){
			return Redirect::route('issuedept.index')->with('success','Department Deleted Successfully.');
		}

		else{
			return Redirect::route('issuedept.index')->with('error','Something went wrong.Try Again.');

		}


	}

}