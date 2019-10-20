@extends('layouts.app')

@section('title', 'Homeworks')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	@foreach( $homeworks as $homework )
		<tr>
			<td>
				<a href="{{ route('homeworks.show', $homework->id)}}">{{ $homework->filename }}</a>
			</td>
			<td>
				<a href="{{ route('homeworks.edit', $homework->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('homeworks.destroy', $homework->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
</table>
<a href="{{ route('homeworks.create') }}">Create homework</a>
@endsection