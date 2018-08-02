<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','cost','description'];

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
}
