@extends('layouts.master')

@section('title', 'Course Info')

@section('content')


	<p>{{ $module->name }}</p>
	<p>course: {{ $module->course->name }}</p>
			
<a href="{{ route('modules.edit', $module->id ) }}">Edit Module</a>
@endsection