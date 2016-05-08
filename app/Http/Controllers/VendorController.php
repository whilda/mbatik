<?php

namespace App\Http\Controllers;

use App\Vendor;
use Input;
use Validator;

class VendorController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function GetView()
    {
    	$vendors = Vendor::all();
    	return View('vendor',['vendors' => $vendors]);
    }
    
    public function Save()
    {
    	$input = Input::all();
    	$validation = Validator::make($input, Vendor::$rules);
    	if ($validation->passes())
    	{
    		Vendor::create($input);
    		return View('vendor',['vendors' => Vendor::all()]);
    	}
    	else
    	{
    		return View('vendor',['vendors' => Vendor::all()])
	    		->withErrors($validation);
    	}
    }
}
