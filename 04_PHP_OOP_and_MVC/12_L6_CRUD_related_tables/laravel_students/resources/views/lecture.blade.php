@extends('layouts.master')

@section('title', 'Lectures')

@section('content')
	@foreach( $modules as $module )
	<h2>{{ $module->name }}</h2>
		<ul>
		@foreach($module->lectures as $lecture )
			<li>{{ $lecture->name }}</li>
		@endforeach
		</ul>
	@endforeach
@endsection