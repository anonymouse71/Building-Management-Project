<?php

class MoneyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /money
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('finance.list')
			->with('transactions',Money::orderBy('id', 'DESC')->get())
			->with('devs',Flat::orderBy('id','asc')->get())
			->with('title',"Full Financial Transaction History");
	}



// public finance system

	public function index_normal()
	{

		$credit = Money::where('flat_id',Auth::user()->flats->id)->where('type','credit')->sum('amount');
		$debit = Money::where('flat_id',Auth::user()->flats->id)->where('type','debit')->sum('amount');
		$final_amount= $credit-$debit;
		if($final_amount>=0){
			$status= true;
		}
		else{
			$status = false;
		}
		return View::make('finance.index_normal')
			->with('transactions',Money::where('flat_id',Auth::user()->flats->id)->orderBy('id', 'ASC')->get())
			->with('credit',$credit)
			->with('debit',$debit)
			->with('status',$status)
			->with('final_amount',$final_amount)
			->with('title',"Financial Transaction History");
	}






	public function show($id)
	{
		$credit = Money::where('flat_id',$id)->where('type','credit')->sum('amount');
		$debit = Money::where('flat_id',$id)->where('type','debit')->sum('amount');
		$final_amount= $credit-$debit;
		if($final_amount>=0){
			$status= true;
		}
		else{
			$status = false;
		}
		return View::make('finance.index_normal')
			->with('transactions',Money::where('flat_id',$id)->orderBy('id', 'ASC')->get())
			->with('credit',$credit)
			->with('debit',$debit)
			->with('status',$status)
			->with('final_amount',$final_amount)
			->with('title',"Financial Transaction History");
	}






	public function devlist()
	{
		return View::make('finance.list')
			->with('devs',Flat::orderBy('id','asc')->get())
			->with('title',"Financial Report by Flat List");
	}





	/**
	 * Show the form for creating a new resource.
	 * GET /money/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$types = [
			''      => '--select--',
			'credit' => 'Cash In',
			'debit'   => 'Cash Out'
		];

		$method = [
			''      => '--select--',
			'Null' =>'Null',
			'CentralDeposit' => 'Central Deposit',
			'Bank' => 'Bank',
			'BankCheck'   => 'Bank Check',
			'Cash'   => 'Hand Cash',
			'bKash'   => 'bKash',
			'DBBLMobileBank'   => 'DBBL Mobile Bank',


		];

		return View::make('finance.create')
			->with('title',"Create Transaction")
			->with('flats',Flat::all()->lists('name','id'))
			->with('types',$types)
			->with('method',$method);
	}






	/**
	 * Store a newly created resource in storage.
	 * POST /money
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
			'flat_id' => 'required',
			'title' => 'required',
			'type' => 'required',
			'method' => 'required',
			'amount' => 'required|numeric',
			'date' => 'required'
		];


		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$money = new Money();

		$money->title = $data['title'];
		$money->type = $data['type'];
		$money->method = $data['method'];
		$money->amount = $data['amount'];
		$money->date = $data['date'];
		$money->flat_id = $data['flat_id'];


		if($money->save()){
			return Redirect::route('finance.list')->with('success',"Transaction saved Successfully")->with('devs',Flat::orderBy('id','asc')->get());
		}else{
			return Redirect::route('finance.create')->with('error',"Something went wrong.Try again");
		}
	}






	/**
	 * Show the form for editing the specified resource.
	 * GET /money/{id}/edit
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
	 * PUT /money/{id}
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
	 * DELETE /money/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function destroy($id)
	{
		Member::destroy($id);

		return Redirect::route('finance.list');
	}
}