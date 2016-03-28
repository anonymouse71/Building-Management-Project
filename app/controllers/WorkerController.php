<?php

class WorkerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /worker
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /worker/create
	 *
	 * @return Response
	 */
	public function create()
	{

		//types
		$types = [
			''            => '----Select----',
			'Electrician' => 'Electrician',
			'Plumber'     => 'Plumber',
			'Cleaner'     => 'Cleaner'
		];


		return View::make('worker.create',compact('types'))->with('title',"Create New Worker");
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /worker
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules =[
			'email'                 => 'required|email|unique:users',
			'password'              => 'required',
			'name'                  =>'required|unique:users',


		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput(Input::except('password', 'password_confirmation'));
		}else{

			$confirmation_code = str_random(30);

			$user = new User();

			$user->email     = $data['email'];
			$user->name      = $data['name'];
			$user->password  = Hash::make($data['password']);
			$user->role_id   = 4;
			$user->flat_id   = Null;

			if($user->save()){

				//attach role
				$role = Role::find(4);
				$user->attachRole($role);

				$user_info = new UserInfo();
				$user_info->user_id = $user->id;
				$user_info->activation = true;
				$user_info->first_login = true;
				$user_info->owner_status = false;
				$user_info->owner_status = true;
				//set a default avatar
				$user_info->icon_url = 'uploads/image/defaultAvatar.png';
				$user_info->avatar_url = 'uploads/image/defaultAvatar.png';

				if($user_info->save()){

					   $worker = new Worker();
					   $worker->user_id = $user->id;
					   $worker->worker_type =$data['worker_type'] ;
					if($worker->save()){
						return Redirect::back()->with('success',"Worker Create Successfully");
					}
					else{
						return Redirect::back()->withInput()->withErrors($validation);
					}

				}else{
					return Redirect::back()->withInput()->withErrors($validation);
				}

			}else{
				return Redirect::back()->withInput()->withErrors($validation);
			}
		}
	}

	/**
	 * Display the specified resource.
	 * GET /worker/{id}
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
	 * GET /worker/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /worker/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /worker/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}