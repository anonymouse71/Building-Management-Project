<?php

class IssueDept extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'issue_dept';

	public static function rules($id = 0)
	{
		return [

			'name' => 'required|unique_with:issue_dept,name'. ($id ? ",$id" : ''),

		];
	}

	public static function messages(){
		return [
			'name.required' => 'Department Name required.',
			'name.unique_with' => 'Department Name already exists.',

		];
	}

}