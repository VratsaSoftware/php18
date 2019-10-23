@extends('layouts.app')

@section('title', 'animal Info')

@section('content')

	<p>{{ $animal->name }}</p>
	<p>{{ $animal->type->type }}</p>

	<img src="{{ asset('animal_images')}}/{{$animal->filename }}">
			
<a href="{{ route('animals.edit', $animal->id ) }}">Edit animal</a>
@endsection