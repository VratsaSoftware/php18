@extends('layouts.master')

@section('title', 'Course Info')

@section('content')


	<p>{{ $course->name }}</p>
			
<a href="{{ route('courses.edit', $course->id ) }}">Edit Course</a>
@endsection