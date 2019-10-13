@extends('layouts.master')

@section('title', 'Course Edit')

@section('content')
{!! Form::model($module, ['route' => ['modules.update', $module->id]]) !!}	
	<label>module name</label>
{!! Form::text('module_name', $module->name, ['placeholder'=>'module name here', 'class'=>'form-control']) !!}
<label>Course</label>
{!! Form::select('course_id', $courses_arr, $module->course->id) !!}
{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection