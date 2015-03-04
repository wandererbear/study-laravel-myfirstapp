@extends('master')

 @section('content')

	<h1>Justine Bieber Official Fanclub</h1>
	
	<ul>
		@foreach ($songs as $song)
			<li><a href="/songsdb/{{ $song->id }}">{{ $song->title }}</a></li>
		@endforeach
	</ul>

@stop