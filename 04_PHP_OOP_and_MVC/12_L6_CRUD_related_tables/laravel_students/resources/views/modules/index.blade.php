@extends('layouts.master')

@section('title', 'modules')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	<tr>
		<td>
			Course name
		</td>
		<td>
			Module name
		</td>
		<td></td>
		<td></td>
	</tr>
	@foreach( $modules as $module )
		<tr>
			<td>{{ $module->course->name }}</td>
			<td>
				<a href="{{ route('modules.show', $module->id)}}">{{ $module->name }}</a>
			</td>			
			<td>
				<a href="{{ route('modules.edit', $module->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('modules.destroy', $module->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
</table>
<a href="{{ route('modules.create') }}">Create module</a>
@endsection