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
	
}
