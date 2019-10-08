@extends('layouts.master')

@section('title', 'Courses')

@section('content')
	<h2>Courses List</h2>
		<ul>
			@foreach($courses as $course)
				<p>{{ $course->name }}</p>
				<p>date created: {{ $course->created_at }}</p>
			@endforeach
		</ul>
@endsection