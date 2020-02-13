<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [];
	
	public function tape()
	{
		return $this->belongsTo(Tape::class);
	}
}
