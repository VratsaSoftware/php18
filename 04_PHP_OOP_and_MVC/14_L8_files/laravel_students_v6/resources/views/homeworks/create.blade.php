@extends('layouts.app')

@section('title', 'Courses Create')

@section('content')
{!! Form::open(['route' => ['homeworks.store'], 'files'=>'true']) !!}	
	<label>HW</label>
{!! Form::file('homework') !!}
{!! Form::hidden('lecture_id', $lecture_id) !!}
	

{!! Form::submit('Upload!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection