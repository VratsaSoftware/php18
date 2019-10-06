<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
    	// $user = User::find(1)->get();
    	$user = User::find(1);
    	// $users = User::all();

    	// dd($user_profile);

    	return view('profile', compact('user'));
    }
}
