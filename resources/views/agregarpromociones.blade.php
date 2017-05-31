@extends('base.layout')

	@section('title', 'canchas')

	@section('content')
	
	<div class="container">
			<div class="container" style="background-color: #FFFFFF">
				<form id="form">
					<div class="col-sm-12 col-md-12 col-lg-12">
					<br>
						<label class="label-form form-group">Selecciona una Localidad:</label>
						<select class="form-control" id="localidad" onchange=" mostrarCanchas()">
							<option>Seleccione</option>
						</select>
						<br>

						<label class="label-form form-group">Selecciona una Cancha:</label>
						<select class="form-control" id="cancha"><option>Seleccione</option></select>
						<br>
						
						<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;">
							<label class="label-form form-group">Datos principales:</label>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6" style="padding-left: 0;">
							<input class="form-control" type="date" id="fecha" value="">
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6" style="padding-right: 0;">
							<input class="form-control" type="text" id="descuento" placeholder="Porcentaje de descuento" value="">
						</div>
						
						<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;"><br>
							<label class="label-form form-group">Descripción</label>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;">
							<textarea style="resize: none;" class="form-control" id="descripcion" rows="4" cols="100"></textarea>
						</div>

						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>

						<input class="btn btn-success " type="submit" value="Enviar">

						<div id="respuesta">
							<p></p>
						</div>

						<input class="form-control" type="date" id="created_at" style="display:none" value=""><br>
						<input class="form-control" type="date" id="updated_at" style="display:none" value=""><br>
						<input class="form-control" type="text" id="idUsuario" style="display:none" value="1">

					</div>
				</form>
			</div>
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/agregarpromociones.js') }}"></script>

	@endsection