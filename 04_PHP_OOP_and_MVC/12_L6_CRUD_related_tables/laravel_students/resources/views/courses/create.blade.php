@extends('layouts.master')

@section('title', 'Courses Create')

@section('content')
{!! Form::open(['route' => ['courses.store']]) !!}	
	<label>Course name</label>
{!! Form::text('course_name', old('course_name'), ['placeholder'=>'course name here', 'class'=>'form-control']) !!}

{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection