@extends('layouts.master')

@section('title', 'Courses Create')

@section('content')
<form method="POST" action="{{ route('courses.store') }}">
	{{ csrf_field() }}
	<label>Course name</label>
	<input type="text" name="course_name">
	<input type="submit" name="submit" value="create" class="btn btn-success">
</form>
@endsection