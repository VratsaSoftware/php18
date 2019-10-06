@foreach($modules as $module)
	<p>{{ $module->name }}</p>
	<p>{{ $module->created_at }}</p>
@endforeach
