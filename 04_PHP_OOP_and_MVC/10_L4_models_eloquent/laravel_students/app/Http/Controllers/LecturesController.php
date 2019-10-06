<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {
    	$module = Module::find(1);

    	return view('lecture', compact('module'));
    }
}
