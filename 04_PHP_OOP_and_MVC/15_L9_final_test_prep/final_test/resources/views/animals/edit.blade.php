@extends('layouts.app')

@section('title', 'animal Edit')

@section('content')
{!! Form::model($animal, ['route' => ['animals.update', $animal->id], 'files'=>'true', 'method'=>'PUT']) !!}	
	<label>animal name</label>
{!! Form::text('name', $animal->name, ['class'=>'form-control']) !!}
<label>animal age</label>
{!! Form::text('age', $animal->age, ['class'=>'form-control']) !!}
{!! Form::text('description', $animal->description, [ 'class'=>'form-control']) !!}
{!! Form::text('birthday', $animal->date_of_birth, ['class'=>'form-control']) !!}
<label>image</label>
{!! Form::file('image')!!}
{!! Form::select('type_id', $types_arr) !!}



{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection