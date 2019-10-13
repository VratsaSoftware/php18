<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'last_name', 'user_id'];

    protected function user()
    {
    	return $this->hasOne('App\User');
    }
}
