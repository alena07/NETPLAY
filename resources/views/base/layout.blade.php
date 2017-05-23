<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	

	<title>@yield('title')</title>

	{{-- Botstrap --}}
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>

	<header>
		
		<nav class="navbar navbar-default navbar-color">
		  <div class="row">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="col-md-5 col-sm-5">
		    <div class="collapse navbar-collapse center-links" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav pull-right">		      	
			        <li class="active color-link nav-text"><a href="{{ url('/') }}"><b>Inicio</b> <span class="sr-only">(current)</span></a></li>
			        <li class="color-link nav-text"><a href="{{ url('/canchas') }}"><b>Canchas</b></a></li>
			        <li class="color-link nav-text"><a href="{{ url('/promociones') }}"><b>Promociones</b></a></li>
			    </ul>		       
		    </div><!-- /.navbar-collapse -->
		    </div>
		    <div class="col-md-2 col-sm-2">
			    	<a class="logo" href="/"></a>
			</div>
			<div class="col-md-5 col-sm-5">
			<div class="collapse navbar-collapse center-links" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav pull-left">    
			        <li class="color-link nav-text"><a href="{{ url('/reservas') }}"><b>Reservas</b></a></li>
			        <li class="color-link nav-text"><a href="{{ url('/ganancias') }}"><b>Ganancias</b></a></li>
			        <li class="color-link nav-text"><a href="#"><b>Contactos</b></a></li>
			    </ul>		       
		    </div><!-- /.navbar-collapse -->
		    </div>
		  </div><!-- /.container-fluid -->
		</nav>

	</header>
<br><br>
	<section>
		<div class="container-fluid">
			@yield('content')
		</div>
	</section>

		<!-- Pie de pagina -->
		<br>
		<footer>
		<div class="col-sm-12 col-md-12 col-lg-12 footer-texture">
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 color-footer">

			{{-- Copyright --}}
			<div class="col-ms-4 col-md-4 col-lg-4 color-footer-leter">
			<center><img class="img-responsive" src="{{ asset('img/logopeque.png') }}" alt="No found" width="18%"></center>
			<p>Todos los derechos reservados © 2017</p>	
			<p>Alejandra Barreto & Danilo Doncel</p>		
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