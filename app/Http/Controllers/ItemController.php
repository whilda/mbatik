<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use App\Item;
use App\Vendor;
use App\Type;
use App\Material;
use App\ItemHistory;

class ItemController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function PrepareData(){
    	return ['vendors' => Vendor::all(), 'types' => Type::all(), 'materials' => Material::all()];
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
   		$itemHist = array(
   				'item_id' => $item->id,
   				'purchase_price' => $item->purchase_price,
   				'sell_price' => $item->sell_price,
   		);
   		ItemHistory::create($itemHist);
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
    
    public function SaveStock(){
    	$input = Input::all();
    	if(Input::get('item_id') == '-')
    		return $this->GetStockView()
    		->with('inputs', $input)
    		->withErrors("Must choose Item");
    	
    	$validation = Validator::make($input, Item::$rulesStock);
    	if (!$validation->passes())
    		return $this->GetStockView()
    		->with('inputs', $input)
    		->withErrors($validation);
    	
    	$itemHist = array(
    			'item_id' => Input::get('item_id'),
    			'purchase_price' => Input::get('purchase_price'),
    			'sell_price' => Input::get('sell_price'),
    	);
    	ItemHistory::create($itemHist);
    	
    	$item = Item::find(Input::get('item_id'));
    	$item->purchase_price = Input::get('purchase_price');
    	$item->sell_price = Input::get('sell_price');
    	$item->quantity +=  Input::get('quantity');
    	$item->save();
    	
    	return $this->GetStockView()->with('success', 'ok');
    }
}
