<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	

	<title>@yield('title')</title>

	{{-- Botstrap --}}
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>
	<div class="container">	
		<div class="formulario-registro" style="margin-top: 7%;">
			<div class="form-top">
        		<div class="form-top-left">
        			<h3 class="login-titulo">Registrate en nuestro sitio web <i class="fa fa-futbol-o login-icon pull-right" aria-hidden="true"></i></h3>

        		</div>
            </div>

            <hr>
            <div class="form-bottom">
				<form role="form" action="" method="post" class="login-form">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Nombres</label>
						<input type="text" name="nombre" placeholder="Nombre..." class="form-username form-control">
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Apellidos</label>
						<input type="text" name="apellido" placeholder="Apellidos..." class="form-username form-control">
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Cedula</label>
						<input type="text" name="cedula" placeholder="Cedula..." class="form-username form-control">
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Teléfono</label>
						<input type="text" name="telefono" placeholder="Teléfono..." class="form-username form-control">
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Tipo</label>
						<select class="form-control" id="tipo"><option>Seleccione</option></select>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Usuario</label>
						<input type="text" name="usuario" placeholder="Usuario..." class="form-username form-control">
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<label class="label-form login-text">Contraseña</label>
						<input type="password" name="contrasena" placeholder="Contraseña..." class="form-username form-control" >
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12"><br><br></div>

					<div class="col-lg-12 col-md-12 col-sm-12">
						<button type="submit" class="btn btn-success pull-right">Registrar!</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Pie de pagina -->
	<br><br><br><br>
	<footer>
		<div class="col-sm-12 col-md-12 col-lg-12 footer-texture">
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 color-footer">

			{{-- Copyright --}}
			<div class="col-ms-4 col-md-4 col-lg-4 color-footer-leter">
			<center><img class="img-responsive" src="{{ asset('img/logopeque.png') }}" alt="No found" width="18%"></center>
			<p>Todos los derechos reservados © 2017</p>	
			<p>Alejandra Barreto - Danilo Doncel</p>		
			</div>

			{{-- Enlaces --}}
			<div class="col-ms-8 col-md-8 col-lg-8">
			<br>
			<a href="#" class="text-footer">Inicio</a> <b style="font-size: 20px;color: #fff;">|</b>
			<a href="#" class="text-footer">Canchas</a> <b style="font-size: 20px;color: #fff;">|</b>
			<a href="#" class="text-footer">Reservas</a>
			</div>
		</div>
	</footer>


	{{-- Jquery - Javascript --}}
	<script src="{{ asset('jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

	@yield('javascript')
	
</body>
</html>