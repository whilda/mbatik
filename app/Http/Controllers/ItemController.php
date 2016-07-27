<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use DB;
use App\Item;
use App\Vendor;
use App\Type;
use App\Material;
use App\ItemHistory;
use App\Transaction;

class ItemController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function PrepareData(){
    	return ['vendors' => Vendor::all(), 'types' => Type::all(), 'materials' => Material::all()];
    }
    
    /* General Function */
    public function GetItem($id)
    {
    	$item = Item::where("id",$id)->first();
    	$json_obj = array(
    			'vendor'		=> $item->vendor->name,
    			'type'			=> $item->type->name,
    			'material'		=> $item->material->name,
    			'note'			=> $item->note,
    			'purchase_price' => $item->purchase_price,
    			'sell_price'	=> $item->sell_price,
    			'quantity'		=> $item->quantity,
    	);
    	return json_encode($json_obj);
    }
    
    /* Item Save */
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
    
    /* Stock */
    public function GetStockView()
    {
    	return View('stock', ["items" => Item::all()]);
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
    			'item_id'		=> Input::get('item_id'),
    			'purchase_price' => Input::get('purchase_price'),
    			'sell_price'	=> Input::get('sell_price'),
    	);
    	ItemHistory::create($itemHist);
    	
    	$item = Item::find(Input::get('item_id'));
    	$item->purchase_price = Input::get('purchase_price');
    	$item->sell_price = Input::get('sell_price');
    	$item->quantity +=  Input::get('quantity');
    	$item->save();
    	
    	return $this->GetStockView()->with('success', 'ok');
    }
    
    /* Transaction */
    public function GetTransactionView()
    {
    	return View('transaction', ["items" => Item::all()]);
    }
    public function SaveTransaction(){
DB::transaction(function () {
    	/* Insert transaction */
    	$transaction_input = array(
    			'customer' 		=> Input::get('cust_name'),
    			'trans_date' 	=> Input::get('trans_date'),
    			'total' 		=> Input::get('total'),
    	);
    	$transaction = Transaction::create($transaction_input);
    	$total_profit=0;
    	
    	$num = (int)Input::get('num');

		/* attach detail transaction */
    	for($i = 1; $i <= $num ; $i++){
    		$item		= Item::find(Input::get('ID'.$i.'_item'));
    		$unit_prof	= (Input::get('ID'.$i.'_unit_price') - $item->purchase_price);
    		$sum_prof	= $unit_prof * Input::get('ID'.$i.'_qty');
    		$total_profit += $sum_prof;
    		$detail = array(
    			'qty'			=> Input::get('ID'.$i.'_qty'),
    			'note'			=> Input::get('ID'.$i.'_note'),
    			'unit_price'	=> Input::get('ID'.$i.'_unit_price'),
    			'unit_profit'	=> $unit_prof,
    			'sum_price'		=> Input::get('ID'.$i.'_sum'),
    			'sum_profit'	=> $sum_prof ,
    		);
    		$transaction->items()->attach(Input::get('ID'.$i.'_item'), $detail);
    		
    		$item->quantity -=  (int)Input::get('ID'.$i.'_qty'); 
    		$item->save();
    	}
    	
    	/*Update profit */
    	$transaction->profit = $total_profit;
    	$transaction->save();
});
	return View('transaction', ["items" => Item::all()])->with('success', 'ok');
    }
}
