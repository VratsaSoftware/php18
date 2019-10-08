<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {
    	// $module = Module::find(1);

    	$modules = Module::all();
    	return view('lecture', compact('modules'));
    }
}
