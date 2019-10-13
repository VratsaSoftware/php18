<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $fillable = ['name'];
	
    public function lectures()
    {
    	return $this->hasMany('App\Lecture');
    }
}
