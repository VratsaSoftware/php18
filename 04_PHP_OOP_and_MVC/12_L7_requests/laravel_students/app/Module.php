<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $fillable = ['name', 'course_id'];
	
    public function lectures()
    {
    	return $this->hasMany('App\Lecture');
    }

    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
}
