@extends('layouts.app')

@section('title', 'animals Create')

@section('content')
{!! Form::open(['route' => ['animals.store'], 'files'=>'true']) !!}	
	<label>animal name</label>
{!! Form::text('name', old('name'), ['placeholder'=>'animal name here', 'class'=>'form-control']) !!}
<label>animal age</label>
{!! Form::text('age', old('age'), ['placeholder'=>'animal age here', 'class'=>'form-control']) !!}
{!! Form::text('description', old('description'), ['placeholder'=>'animal description here', 'class'=>'form-control']) !!}
{!! Form::text('birthday', old('birthday'), ['placeholder'=>'yyyy-mm-dd', 'class'=>'form-control']) !!}
<label>image</label>
{!! Form::file('image')!!}
{!! Form::select('type_id', $types_arr) !!}



{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection