@extends('base.layout')

	@section('title', 'reserva')

	@section('content')

		<div class="container">
			<div class="formulario">
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
						<input class="form-control" type="date" id="fechaInicial" value="<?php echo date("Y-m-d");?>"><br>

						<input class="form-control" type="time" id="horaInicial" value="<?php echo date("H:i");?>"><br>

						<label class="label-form form-group">Hora Final:</label>
						<input class="form-control" type="datetime" id="fechaFinal" value="<?php echo date("Y-m-d\ H:i");?>"><br>

						<input class="form-control" type="time" id="horaInicial" value="<?php echo date("H:i");?>"><br>

						<input class="btn btn-success pull-right" type="submit" value="Enviar">

						<input class="form-control" type="date" id="horaActual" style="display:none" value="<?php echo date("Y-m-d");?>"><br>
					</div>
				</form>
			</div>
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/reservas.js') }}"></script>

	@endsection