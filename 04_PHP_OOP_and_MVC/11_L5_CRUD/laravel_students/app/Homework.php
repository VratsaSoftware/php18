<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
    	'lecture_id',
    	'title',
    	'deadline'];
}
