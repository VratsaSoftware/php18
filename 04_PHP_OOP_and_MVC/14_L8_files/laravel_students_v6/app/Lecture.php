<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
	protected $fillable = ['name', 'course_id'];
    
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }

    public function homeworks()
    {
    	return $this->hasMany('App\Homework');
    }
}
