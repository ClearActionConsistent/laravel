<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $guarded = [];
	
	public function customers()
	{
		return $this->hasMany(Customer::class);
	}
}
