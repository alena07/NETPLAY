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
							<input class="form-control" type="date" id="fechaInicial" value="<?php echo date("Y-m-d");?>">
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5" style="padding-right: 0;">
							<input class="form-control" type="time" id="horaInicial" value="<?php echo date("H:i");?>">
						</div>
						
						<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;"><br>
							<label class="label-form form-group">Hora Final:</label>
						</div>
						<div class="col-sm-7 col-md-7 col-lg-7" style="padding-left: 0;">
							<input class="form-control" type="datetime" id="fechaFinal" value="<?php echo date("Y-m-d\ H:i");?>">
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5" style="padding-right: 0;">
							<input class="form-control" type="time" id="horaInicial" value="<?php echo date("H:i");?>"><br>
						</div>

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