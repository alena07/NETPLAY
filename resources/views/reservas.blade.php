@extends('base.layout')

	@section('title', 'reserva')

	@section('content')

		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12 formulario">
				<form id="form">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<label class="label-form form-group">Selecciona una Localidad:</label>
						<select class="form-control" id="localidad" onchange=" mostrarCanchas()">
							<option>Seleccione</option>
						</select><br>

						<label class="label-form form-group">Selecciona una Cancha:</label>
						<select class="form-control" id="cancha"><option>Seleccione</option></select>
						<br>

						<label class="label-form form-group">Hora Inicial:</label>
						<input class="form-control" type="datetime-local"  id="datetime" value="<?php echo date("Y-m-d\TH:i");?>"><br>

						<label class="label-form form-group">Hora Final:</label>
						<input class="form-control" type="datetime-local"  id="datetime" value="<?php echo date("Y-m-d\TH:i");?>"><br>

						<input class="btn btn-success" type="button" value="enviar" onclick="d()">
					</div>
				</form>
			</div>
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/reservas.js') }}"></script>

	@endsection