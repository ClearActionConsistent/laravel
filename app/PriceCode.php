<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceCode extends Model
{
    protected $guarded = [];
	protected $fillable = ['name', 'code'];
	public function movies()
	{
		return $this->hasMany(Movie::class);
	}
}
