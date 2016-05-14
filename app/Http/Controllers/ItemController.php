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
    	echo Tag::where('tag','gaul')->count();
    }

    public function Save()
    {
    	$input = Input::all();
    	$validation = Validator::make($input, Item::$rules);
    	if (!$validation->passes())
    		return View('item',$this->PrepareData())
    			->with('inputs', $input)
	    		->withErrors($validation);
    	
    	$is_id_exist = Item::where("code",$input['code'])->count();
    	if($is_id_exist == 1)
    		return View('item', $this->PrepareData())
    			->with('inputs', $input)
    			->withErrors("Code is already exist");
    	
    	if(Input::get('vendor_id') == '-')
    		return View('item', $this->PrepareData())
    			->with('inputs', $input)
    			->withErrors("Must choose vendor");
    	
   		$item = Item::create($input);
   		$arr_tag_id = array();
   		 
   		$tags = json_decode($input['tag-result']);
   		foreach ($tags as $tag){
   			$is_tag_exist = Tag::where("tag",$tag)->count();
   			$tag_id = 0;
   			if($is_tag_exist == 0){
   				$tag_id = Tag::create(['tag' => $tag])->id;
   			} else {
   				$tag_id = Tag::where("tag",$tag)->first()->id;
   			}
   			array_push($arr_tag_id,$tag_id);
   		}
   		$item->tags()->sync($arr_tag_id);
   		return View('item', $this->PrepareData())->with('success', 'ok');
    }
}
