@extends('layouts.app')

@section('title', 'Courses Create')

@section('content')
<div class="col-sm-8">
{!! Form::model($homework, ['route' => ['homeworks.update', $homework->id], 'files'=>'true', 'method' => 'PATCH']) !!}	
	<label>Old HW</label>
	<p>{{ $homework->filename }}</p>
	<label>new HW</label>
	<p>{!! Form::file('homework') !!}</p>
	{!! Form::submit('Upload!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
@endsection