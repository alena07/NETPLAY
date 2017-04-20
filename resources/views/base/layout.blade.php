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
		  <div class="container-fluid">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		      {{-- Logo --}}
				<div class="col-md-6">
		      		<img src="/img/logoNetPlay2.png" alt="" width="60%">
		      	</div>
		      	<div class="col-md-6">
		      		<h1 class="center-title"><b><span class="color-green"><FONT SIZE=100>Net</font></span><FONT SIZE=50>Play</font></b></h1>
		      	</div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse center-links" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav pull-right">		      	
			        <li class="active color-link"><a href="/"><b>Inicio</b> <span class="sr-only">(current)</span></a></li>
			        <li class="color-link"><a href="#"><b>Canchas</b></a></li>
			        <li class="color-link"><a href="#"><b>Reservas</b></a></li>
			    </ul>		       
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

	</header>

	<section>

		@yield('content')

	</section>

		<!-- Pie de pagina -->
		<br>
		<footer>

		<div class="col-sm-12 col-md-12 col-lg-12 color-footer">

			{{-- Copyright --}}
			<div class="col-ms-4 col-md-4 col-lg-4 color-footer-leter">
			{{-- <center><img class="img-responsive" src="{{ asset('img/logo-blanco.png') }}" alt="No found" width="20%"></center> --}}
			<p>Todos los derechos reservados © 2017</p>			
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