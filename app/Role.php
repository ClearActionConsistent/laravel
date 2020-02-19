<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
	{
		return $this->belongsToMany('App\User', 'user_roles');
	}
	
	public function permissions()
	{
		return $this->belongsToMany('App\Permission', 'role_permissions');
	}
}
