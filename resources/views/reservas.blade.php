@extends('base.layout')

	@section('title', 'reserva')

	@section('content')

		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<form id="form">
					<select id="localidad" onchange=" mostrarCanchas()">
					<option>Seleccione una localidad</option>
					</select>
					<select id="cancha"><option>Seleccione una cancha</option></select>
					<input type="date" id="date" value="<?php echo date("Y-m-d");?>">
					<input type="time" id="time" value="<?php echo date("H:i");?>">
					<input type="datetime-local"  id="datetime" value="<?php echo date("Y-m-d\TH:i");?>">
					<input type="button" value="enviar" onclick="d()">
				</form>
			</div>
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/reservas.js') }}"></script>

	@endsection