<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name','email','age','user_id'];

	public function projects()
	{
		return $this->hasMany('App\Project');
	
	}
}

