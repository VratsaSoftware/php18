@extends('layouts.app')

@section('title', 'animals')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	@foreach( $animals as $animal )
		<tr>
			<td>
				<a href="{{ route('animals.show', $animal->id)}}">{{ $animal->name }}</a>
			</td>
			<td>
				<a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('animals.destroy', $animal->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
</table>
<a href="{{ route('animals.create') }}">Create animal</a>
@endsection