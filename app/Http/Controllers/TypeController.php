<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\Type;

class TypeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function GetView()
	{
		return View('type',['types' => Type::all()]);
	}
	
	public function Save()
	{
		$input = Input::all();
		$validation = Validator::make($input, Type::$rules);
		if ($validation->passes())
		{
			Type::create($input);
			return $this->GetView();
		}
		else
		{
			return $this->GetView()->withErrors($validation);
		}
	}
}
