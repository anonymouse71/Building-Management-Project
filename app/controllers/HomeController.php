<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



	public function home(){
		return View::make('index')
			->with('title','Uniliver || Home');
	}

	public function developer(){
		return View::make('developer')
			->with('title','Uniliver || Developer');
	}



	public  function missing(){
		return View::make('errors.404')
			->with('title','Error!!');
	}


	public  function error(){
		return View::make('errors.500')
			->with('title','Error!!');
	}
}


