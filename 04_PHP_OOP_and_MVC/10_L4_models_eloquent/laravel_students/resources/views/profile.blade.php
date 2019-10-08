@extends('layouts.master')

@section('title', 'Courses')

@section('content')
	<h1>profile page</h1>
	
	<p> {{ $user->email }} </p>
	<p> {{ $user->name }} </p>
	
	<p> {{ $user->profile->first_name }}</p>
	<p> {{ $user->profile->last_name }}</p>
@endsection

