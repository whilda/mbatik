<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'items';
	protected $fillable = [
			'vendor_id',
			'code',
			'purchase_price',
			'sell_price',
			'quantity',
			'note'	
	];
	public static $rules = array(
			'vendor_id' => 'required',
			'code' => 'required',
			'purchase_price' => 'required',
			'sell_price' => 'required',
			'quantity' => 'required'
	);
	public function vendor()
	{
		return $this->belongsTo('App\Vendor','vendor_id');
	}
}
