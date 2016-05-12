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
	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'items_tags', 'item_id', 'tag_id');
	}
	public function tagsView(){
		$str = '';
		foreach ($this->tags->lists('tag') as $tag){
			$str = $str.' '.$tag;
		}
		return $str;
	}
}
