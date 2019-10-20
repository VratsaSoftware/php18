@extends('layouts.app')

@section('title', 'Course Edit')

@section('content')
<form method="POST" action="{{ route('courses.update', $course->id) }}">
	{{ csrf_field() }}
	{{ method_field('PUT')}}
	<label>Course name</label>
	<input type="text" name="course_name" value="{{ $course->name }}">
	@if($errors->has('course_name'))
	<div class="col-sm-8 col-sm-offset-1 text-danger">
		{{ $errors->first('course_name') }} 
	</div>
@endif
	<input type="submit" name="submit" value="create" class="btn btn-success">
</form>
@endsection