@extends('base.layout')

	@section('title', 'index')

	@section('content')
	<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-1 col-md-1 col-lg-1">
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10">	
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img class="img-responsive" src="/img/img1.jpg" alt="Chania">
			    </div>

			    <div class="item">
			      <img class="img-responsive" src="/img/img2.jpg" alt="Chania">
			    </div>

			    <div class="item">
			      <img class="img-responsive" src="/img/img3.jpg" alt="Flower">
			    </div>

			    <div class="item">
			      <img class="img-responsive" src="/img/img4.jpg" alt="Flower">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1">
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">
		<br><br><br>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<img class="img-responsive barras" src="/img/barra.png" alt="Barra">
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<p class="text-titulo"><font color="#008000">Net</font>Play</p>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<img class="img-responsive barras" src="/img/barra.png" alt="Barra">
			</div>
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<center><img class="img-responsive" src="/img/icon-soccer.png" alt="Balon" width="50%"></center>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8">
				<br>
				<p style="font-size: 17px">Somos una organización Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">
		<br><br><br>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<img class="img-responsive barras" src="/img/barra.png" alt="Barra">
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<p class="text-titulo">Reservas</p>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<img class="img-responsive barras" src="/img/barra.png" alt="Barra">
			</div>
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-7 col-md-7 col-lg-7 text-center">
				<br><br>
				<p style="font-size: 19px">Realiza la reserva de una cancha ahora mismo!</p>
				<br>
				<a href="/reservas" class="btn btn-success">Más Información</a>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-5">
				<center><img class="img-responsive" src="/img/cancha.png" alt="Balon" width="65%"></center>
			</div>
		</div>


	</div>

	@endsection