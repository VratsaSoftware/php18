@extends('layouts.master')

@section('title', 'Courses Create')

@section('content')
<form method="POST" action="{{ route('courses.store') }}">
{!! Form::open(['route' => ['courses.store']]) !!}	
	<label>Course name</label>
{!! Form::text('course_name',null, ['placeholder'=>'course name here', 'class'=>'form-control']) !!}

{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection