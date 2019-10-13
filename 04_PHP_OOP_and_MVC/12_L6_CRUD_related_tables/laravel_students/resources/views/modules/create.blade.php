@extends('layouts.master')

@section('title', 'modules Create')

@section('content')
{!! Form::open(['route' => ['modules.store']]) !!}	
	<label>module name</label>
{!! Form::text('module_name', old('module_name'), ['placeholder'=>'module name here', 'class'=>'form-control']) !!}
<label>Course</label>
{!! Form::select('course_id', $courses_arr) !!}

{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection