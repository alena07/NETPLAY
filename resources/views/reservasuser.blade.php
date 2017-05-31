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
						
						<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;">
							<label class="label-form form-group">Hora Inicial:</label>
						</div>
						<div class="col-sm-7 col-md-7 col-lg-7" style="padding-left: 0;">
							<input class="form-control" type="date" id="fechaInicial" value="" oninput="mostrarFechaFinal()">
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5" style="padding-right: 0;">
							<input class="form-control" type="time" id="horaInicial" value="" oninput="mostrarHoraFinal()">
						</div>
						
						<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;"><br>
							<label class="label-form form-group">Hora Final:</label>
						</div>
						<div class="col-sm-7 col-md-7 col-lg-7" style="padding-left: 0;">
							<input class="form-control" type="date" id="fechaFinal" value="" disabled="">
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5" style="padding-right: 0;">
							<input class="form-control" type="time" id="horaFinal" value="" disabled=""><br>
						</div>

						<input class="btn btn-success pull-right" type="submit" value="Enviar">

						<div id="respuesta">
							<p></p>
						</div>

						<input class="form-control" type="date" id="fechaReserva" style="display:none" value=""><br>
						<input class="form-control" type="date" id="created_at" style="display:none" value=""><br>
						<input class="form-control" type="date" id="updated_at" style="display:none" value=""><br>
						<input class="form-control" type="text" id="idUsuario" style="display:none" value="2">
					</div>
				</form>
			</div>
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/reservas.js') }}"></script>

	@endsection