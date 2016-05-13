<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
	protected $fillable = [
			'tag'
	];
	public function item()
	{
		return $this->belongsToMany('App\Item', 'items_tags','tag_id', 'item_id');
	}
}
