@extends('master')

 @section('content')

	<h1>Justine Bieber Official Fanclub</h1>
	
	<ul>
		@foreach ($songs as $index => $song)
			<li><a href="/songs/{{ $index }}">{{ $song }}</a></li>
		@endforeach
	</ul>

@stop