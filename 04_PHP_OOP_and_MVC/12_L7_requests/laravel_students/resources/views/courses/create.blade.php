@extends('layouts.master')

@section('title', 'Courses Create')

@section('content')
{!! Form::open(['route' => ['courses.store']]) !!}	
	<label>Course name</label>
{!! Form::text('course_name', old('course_name'), ['placeholder'=>'course name here', 'class'=>'form-control']) !!}
@if($errors->has('course_name'))
	<div class="col-sm-8 col-sm-offset-1 text-danger">
		{{ $errors->first('course_name') }} 
	</div>
@endif

{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection