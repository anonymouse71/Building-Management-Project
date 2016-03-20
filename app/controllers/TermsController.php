<?php

class TermsController extends \BaseController {


	public function index()
	{
		$terms = Terms::find(1);
		return View::make('terms.index',compact('terms'))->with(['title'=>'Terms and Condition']);
	}



	public function edit()
	{
		$term = Terms::find(1);

		return View::make('terms.edit', compact('term'))->with('title',"Terms and Condition");
	}






	public function update()
	{

		$rules=[
			'details' => 'required'
		];
		$data = Input::all();
		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$term = Terms::find(1);

		$term->details = $data['details'];



		if($term->save()){
			return Redirect::route('terms.index')->with('success',"Terms Updated Successfully");
		}else{
			return Redirect::route('terms.index')->with('error',"Something went wrong.Try again");
		}
	}



}