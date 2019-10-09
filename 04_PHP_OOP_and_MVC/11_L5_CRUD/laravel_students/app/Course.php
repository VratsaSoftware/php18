<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function lectures()
    {
    	return $this->hasMany('App\Lecture');
    }

    public function modules()
    {
    	return $this->hasMany('App\Module');
    }
}
