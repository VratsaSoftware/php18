@extends('layouts.master')

@section('title', 'Courses')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	@foreach( $courses as $course )
		<tr>
			<td>
				<a href="{{ route('courses.show', $course->id)}}">{{ $course->name }}</a>
			</td>
			<td>
				<a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('courses.destroy', $course->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
</table>
<a href="{{ route('courses.create') }}">Create Course</a>
@endsection