@extends('layouts.app')

@section('title', 'Lectures')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	
	@foreach( $lectures as $lecture )
		<tr>
			<td>
				<a href="{{ route('lectures.show', $lecture->id)}}">{{ $lecture->name }}</a>
			</td>
			@if(Auth::user()->role == 'admin')
			<td>
				<a href="{{ route('lectures.edit', $lecture->id) }}" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="{{ route('lectures.destroy', $lecture->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
			@else
				<td>
					@if( !empty($lecture->homeworks) )
						@foreach($lecture->homeworks as $lhw)							
								@if( $lhw->user_id == Auth::user()->id )
									{{ $lhw->filename }}
									<a href="{{ route('homeworks.edit', $lhw->id)}}">Edit HW</a>								
								@endif							
						@endforeach
					@endif
				</td>
				<td>
					<a href="{{ route('homeworks.create', [ 'lecture_id' => $lecture->id ]) }}">Качи ново домашно</a>
				</td>
			@endif			
		</tr>
	@endforeach
</table>
<a href="{{ route('lectures.create') }}">Create lecture</a>
@endsection