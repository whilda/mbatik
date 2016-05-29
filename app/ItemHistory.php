<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemHistory extends Model
{
    protected $table = 'item_histories';
	protected $fillable = [
			'item_id',
			'purchase_price',
			'sell_price',
	];
}
