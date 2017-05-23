@extends('base.layout')

	@section('title', 'promociones')

	@section('content')
	
	<div class="col-sm-12 col-md-12 col-lg-12 text-center">

		<label for="fechaBusqueda">Desde</label>
		<input type="date" id="fechaBusqueda" oninput="BuscarTodo()">
		<label for="fechaBusqueda2">Hasta</label>
		<input type="date" id="fechaBusqueda2" oninput="BuscarTodo()">
		
		<p id="respuesta"></p>

	</div>
	<br>
	<br>
	<div id="promociones" class="col-sm-12 col-md-12 col-lg-12">
		
	</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/promociones.js') }}"></script>

	@endsection