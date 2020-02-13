<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];
	
	
	public function priceCode()
	{
		return $this->belongsTo(PriceCode::class);
	}
	
	public function tapes()
	{
		return $this->hasMany(Tape::class);
	}
}
