<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['title', 'date', 'module_id'];

    public function module()
    {
        return $this->belongsTo('App\Module');
    }
}
