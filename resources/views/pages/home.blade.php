@extends('master')

@section('content')
	<!--<h1><?= $name; ?></h1> -->
	<h1>{!! $name !!}</h1>
	
	<!--
	<?php foreach($lessons as $lesson) : ?>
		<h2><?= $lesson; ?></h2>
	<?php endforeach; ?>
-->
	@if($lessons)
		@foreach ($lessons as $lesson)
			<h2>{{ $lesson }}</h2>
		@endforeach
	@endif
@stop