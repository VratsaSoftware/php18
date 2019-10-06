<h2>{{ $module->name }}</h2>
<ul>
@foreach($module->lectures as $lecture )
	<li>{{ $lecture->name }}</li>
@endforeach
</ul>