@extends('layouts.master')

@section('title', 'Course Edit')

@section('content')
<form method="POST" action="{{ route('courses.update', $course->id) }}">
	{{ csrf_field() }}
	{{ method_field('PUT')}}
	<label>Course name</label>
	<input type="text" name="course_name" value="{{ $course->name }}">
	<input type="submit" name="submit" value="create" class="btn btn-success">
</form>
@endsection