@extends('base.layout')

	@section('title', 'ganancias')

	@section('content')

		<div class="container">

				<form id="form">
					
					<div class="col-sm-12 col-md-12 col-lg-12 text-center" style="background-color: #FEFEFE;">	
						<br>

						<label for="fechaInicial">Desde</label>			
						<input type="date" id="fechaInicial">
						<label for="fechaFinal">hasta</label>	
						<input type="date" id="fechaFinal">
						
						<input class="btn btn-success" type="submit" value="Aceptar">
					</div>

					<div id="total" class="">
						
					</div>
					
					<p id="respuesta"></p>

				</form>
			
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/ganancias.js') }}"></script>

	@endsection