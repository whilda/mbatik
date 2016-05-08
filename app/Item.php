<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'items';
	protected $fillable = [
			'name'
	];
	public static $rules = array(
			'name' => 'required|min:5'
	);
}
