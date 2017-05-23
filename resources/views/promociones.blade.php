@extends('base.layout')

	@section('title', 'promociones')

	@section('content')
	
	<div class="col-sm-12 col-md-12 col-lg-12 text-center">

		<form id="form">

			<label for="fechaBusqueda">Desde</label>
			<input type="date" id="fechaBusqueda">
			<label for="fechaBusqueda2">Hasta</label>
			<input type="date" id="fechaBusqueda2">

			<input class="btn btn-success" type="submit" value="Aceptar">
			
			<p id="respuesta"></p>

		</form>	

	</div>
	<br>
	<br>
	<div id="promociones" class="col-sm-12 col-md-12 col-lg-12">
		
	</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/promociones.js') }}"></script>

	@endsection