<?php

namespace App\Http\Controllers;

use App\Tag;
class TagController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function GetAllTag()
    {
    	return Tag::all()->lists('tag');
    }
}
