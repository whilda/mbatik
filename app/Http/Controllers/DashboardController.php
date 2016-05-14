<?php

namespace App\Http\Controllers;

use App\AssetHistory;
use App\Item;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function testing_purpose()
    {
    	
    }
    public function api_asset()
    {
    	$asset_histories = AssetHistory::all();
    	$output = array();
    	foreach ($asset_histories as $a){
    		$date = date_parse($a->created_at);
    		array_push($output,[mktime(0,0,0,$date['month'],$date['day'],$date['year'])*1000,$a->asset]);
    	}
    	echo json_encode($output);
    }
    
    public function overview()
    {
        return view('overview', $this->PrepareData());
    }
 	
    public function PrepareData(){
    	return ['items' => Item::where('quantity','<','5')->get()];
    }
    public function transaction()
    {
    	return view('transaction');
    }
}
