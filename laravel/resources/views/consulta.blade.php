@extends('layout')

@section('title', 'Consulta')

@section('content')
<div class="container">
	<h1>Consulta</h1>
	Cuit: <b>{{ $cuit }}</b></br>

	<?php $resultados = DB::table('afip_personas')->where('cuit','=',$cuit)->get();
	?>

	@foreach($resultados as $resultado)
	<ul>
	<li><ins>NOMBRE:</ins> {{ $resultado->NOMBRECOMPLETO }} </li></br>
	<li><ins>SEXO:</ins> {{ $resultado->SEXO }} </li></br>
	<li><ins>DOC_NUMERO:</ins> {{ $resultado->DOC_NUMERO }} </li></br>
	<li><ins>FNACIMIENTO:</ins> {{ $resultado->FNACIMIENTO }} </li></br>
	</ul>

	@endforeach
</div>
@endsection