<?php

namespace App\Http\Controllers;

use App\Course;
use App\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function index()
    {
    	// $modules = Module::all();
    	$courses = Course::all();

    	return view('module', compact('courses'));
    }
}
