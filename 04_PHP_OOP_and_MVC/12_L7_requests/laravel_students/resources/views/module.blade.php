@extends('layouts.master')

@section('title', 'Modules')

@section('content')

	@foreach( $courses as $course )
		<h3> {{ $course->name }} </h3>
		@if( $course->modules )
			@foreach($course->modules as $module)
				<p>{{ $module->name }} - created: {{ $module->created_at }}</p>
			@endforeach
		@endif
	@endforeach

@endsection
