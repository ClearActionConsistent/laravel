<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tape;

class Rental extends Model
{
    protected $guarded = [];
	protected $fillable = ['tape_id', 'return_date'];
	
	public function tape()
	{
		return $this->belongsTo(Tape::class);
	}
}
