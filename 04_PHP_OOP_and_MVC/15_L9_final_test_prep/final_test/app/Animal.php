<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

	protected $fillable = ['name', 
							'age', 
							'description', 
							'date_of_birth', 
							'filename', 
							'type_id'];
    public function type()
    {
    	return $this->belongsTo('App\Type');
    }
}
