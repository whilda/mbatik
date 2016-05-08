<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\Item;

class ItemController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function GetView()
    {
    	$items = Item::all();
    	return View('item',['items' => $items]);
    }
    
    public function Save()
    {
    	$input = Input::all();
    	$validation = Validator::make($input, Vendor::$rules);
    	if ($validation->passes())
    	{
    		Item::create($input);
    		return View('item',['items' => Item::all()]);
    	}
    	else
    	{
    		return View('item',['items' => Item::all()])
	    		->withErrors($validation);
    	}
    }
}
