@extends('layout')

@section('title', 'Consulta')

@section('content')
<div class="container">
	<h1>Consultar Cuit</h1>
	<form method="POST" action="{{route('formulario')}}">
		@csrf
		<div class="form-group col-8">
			<label for="cuit"><strong>Cuit:</strong></label>
			<input class ="shadow form-control @error('cuit') is-invalid @else border-0 @enderror" type="text" name="cuit" placeholder="Cuit..." value="{{ old('cuit') }}"><br>

			@error('cuit')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<button class="btn btn-primary shadow">Consultar</button>
			</div>
	</form>
</div>
@endsection