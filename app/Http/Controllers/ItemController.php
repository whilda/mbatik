<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\Item;
use App\Vendor;
use App\Tag;

class ItemController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function PrepareData(){
    	return ['items' => Item::all(), 'vendors' => Vendor::all()];
    }
    
    public function GetView()
    {
    	return View('item', $this->PrepareData());
    }
    
    public function run()
    {
    	echo "ex";
    }

    public function Save()
    {
    	$input = Input::all();
    	$validation = Validator::make($input, Item::$rules);
    	if ($validation->passes())
    	{
    		$is_id_exist = Item::where("code",$input['code'])->count();
    		if($is_id_exist == 0){
    			$item = Item::create($input);
    			$arr_tag_id = array();
    			
    			$tags = json_decode($input['tag-result']);
    			foreach ($tags as $tag){
    				$is_tag_exist = Tag::where("tag",$tag)->count();
    				$tag_id = 0;
    				if($is_id_exist == 0){
    					echo $tag;
    					$tag_id = Tag::create(['tag' => $tag])->id;
    				} else {
    					$tag_id = Tag::where("tag",$tag)->first()->id;
    				}	
    				array_push($arr_tag_id,$tag_id);
    			}
    			$item->tags()->sync($arr_tag_id);
    			return View('item', $this->PrepareData());
    		} else {
    			return View('item', $this->PrepareData())
    				->withErrors("Code is already exist");
    		}
    	}
    	else
    	{
    		return View('item',$this->PrepareData())
	    		->withErrors($validation);
    	}
    }
}
