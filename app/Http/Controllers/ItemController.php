<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\Item;
use App\Vendor;
use App\Type;
use App\Material;

class ItemController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function PrepareData(){
    	return ['items' => Item::all(), 'vendors' => Vendor::all(), 'types' => Type::all(), 'materials' => Material::all()];
    }
    
    public function GetView()
    {
    	return View('item', $this->PrepareData());
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
    	
    	if(Input::get('type_id') == '-')
    		return View('item', $this->PrepareData())
    			->with('inputs', $input)
    			->withErrors("Must choose type");
    
    	if(Input::get('material_id') == '-')
    		return View('item', $this->PrepareData())
    			->with('inputs', $input)
    			->withErrors("Must choose material");
    				
   		$item = Item::create($input);
   		return View('item', $this->PrepareData())->with('success', 'ok');
    }
    
    public function GetStockView()
    {
    	return View('stock', ["items" => Item::all()]);
    }
	public function GetItem($id)
    {
    	$item = Item::where("id",$id)->first();
    	$json_obj = array(
    		'vendor' => $item->vendor->name,
    		'type' => $item->type->name,
    		'material' => $item->material->name,
    		'note' => $item->note,
    		'purchase_price' => $item->purchase_price,
    		'sell_price' => $item->sell_price,
    		'quantity' => $item->quantity,
    	); 
    	return json_encode($json_obj);
    }
}
