<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class ModulesController extends Controller
{
    public function index()
    {
    	$modules = Module::all();

    	return view('module', compact('modules'));
    }
}
