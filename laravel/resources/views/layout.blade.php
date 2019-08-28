<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Defecto')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="/js/app.js" defer></script>
	<style>
		.active a {
			color:red;
			text-decoration: none;
		}
	</style>

</head>
<body>

	<nav class="navbar g-white shadow-sm">

		<a class="nav-brand" href={{ route('home')}}">
			{{ config('app.name') }}
		</a>

		<ul class="nav nav-pills">

			<li class="nav-item"> <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
			<li class="nav-item"> <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
			<li class="nav-item"> <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
			<li class="nav-item"> <a class="nav-link {{ setActive('portfolio') }}" href="{{ route('portfolio') }}">@lang('Portfolio')</a></li>
			<li class="nav-item"> <a class="nav-link {{ setActive('formulario') }}" href="{{ route('formulario') }}">@lang('Consulta Cuit')</a></li>
			@auth
			<li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión [{{ auth()->user()->name }}]</a>
			</li>
			@else
			<li class="nav-item"> <a class="nav-link {{ setActive('login')  }}" href="{{ route('login') }}">@lang('Login')</a></li>
			@endauth
		</ul>

	</nav>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 		@csrf
    </form>

	@yield('content')

</body>
</html>