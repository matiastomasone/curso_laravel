@extends('layout')

@section('title', 'Portfolio')

@section('content')
<div class="container">
	<h1>Portfolio</h1>


	<ul>


		@isset($portfolio)
			@forelse ($portfolio as $portfolioItem)
			<li> {{ $portfolioItem['title'] }} </li>
			@empty
			<li>No hay proyectos para mostrar</li>
			@endforelse

		@else
			<li>No existe la variable</li>
		@endisset

	</ul>
</div>
@endsection