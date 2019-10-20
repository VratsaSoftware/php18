<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
	protected $fillable = ['user_id', 'lecture_id', 'filename'];
    public function lecture()
    {
    	return $this->belongsTo('App\Lecture');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
