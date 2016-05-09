<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\Item;
use App\Vendor;

class ItemController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function GetView()
    {
    	$items = Item::all();
    	return View('item',['items' => $items, 'vendors' => Vendor::all()]);
    }
    
    public function Save()
    {
    	$input = Input::all();
    	$validation = Validator::make($input, Item::$rules);
    	if ($validation->passes())
    	{
    		Item::create($input);
    		return View('item',['items' => Item::all(), 'vendors' => Vendor::all()]);
    	}
    	else
    	{
    		return View('item',['items' => Item::all(), 'vendors' => Vendor::all()])
	    		->withErrors($validation);
    	}
    }
}
