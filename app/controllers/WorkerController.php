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

		$user= User::where('role_id','=',4)->get();
		return View::make('worker.index',compact('user'))->with('title',"Worker List");
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
			'phone'                  =>'required',
		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput(Input::except('password'));
		}else{

			if(Worker::where('worker_type','=',$data['worker_type'])->count() == 0){

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
				$user_info->phone = $data['phone'];
				$user_info->first_login = true;
				$user_info->owner_status = false;
				$user_info->owner_status = true;
				$user_info->owner_approve = true;
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
					return Redirect::back()->with('error',"Something went wrong");
				}

			}else{
				return Redirect::back()->with('error',"Something went wrong");
			}
		}else{
				return Redirect::back()->with('error',"Worker type has already assigned, Try with another one");
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

		//types
		$types = [
			''            => '----Select----',
			'Electrician' => 'Electrician',
			'Plumber'     => 'Plumber',
			'Cleaner'     => 'Cleaner'
		];

		$worker_type= Worker::where('user_id',$id)->pluck('worker_type');
		$user= User::findOrFail($id);
		return View::make('worker.edit',compact('types','user','worker_type'))->with('title',"Edit Worker");
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


		$rules =[
			'email'                 => 'required',
			'name'                  =>'required',
			'phone'                  =>'required',
			'worker_type'                  =>'required',
		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);



		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput(Input::except('password'));
		}else{

			//count worker if there any worker with this type exists or not
			//In update One similar worker can stay in database thats why we check 1
			//on the other hand no similar user can stay in database thats why its 0
			$worker_count =Worker::where('worker_type','=',$data['worker_type'])->count();

			if($worker_count == 0 ||$worker_count == 1 ){

				$user =User::findOrfail($id);
				$user->email     = $data['email'];
				$user->name      = $data['name'];
				if($user->save()){


					UserInfo::where('user_id','=',$id)->update([
						'phone' =>$data['phone']
					]);

					Worker::where('user_id',$id)->update([
							'worker_type'=> $data['worker_type']
						]);



							return Redirect::back()->with('success',"Worker Update Successfully");
						}
						else{
							return Redirect::back()->with('error',"Something Went Wrong,Please try again");
						}
			    	}
			         else{
			 	         return Redirect::back()->with('error',"Worker type has already assigned, Try with another one");
			      }
			  }
		}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /worker/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function workerDelete($id)
	{
		$member = User::findOrFail($id);
		if($member->delete())
			return Redirect::route('worker.index')->with('success', "The Worker has been deleted.");
		else
			return Redirect::route('worker.index')->with('errors', 'Some error occured. Try again.');
	}


}