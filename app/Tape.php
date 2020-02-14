<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tape extends Model
{
    Protected $guarded = [];
	
	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
	
	public function stocks()
	{
		return $this->hasMany(Stock::class);
	}
	
	public function rentals()
	{
		return $this->hasMany(Rental::class);
	}
}
