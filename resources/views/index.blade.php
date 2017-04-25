@extends('base.layout')

	@section('title', 'index')

	@section('content')
	<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-2 col-md-2 col-lg-2">
		</div>

		<div class="col-sm-8 col-md-8 col-lg-8">	
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
			      <img src="/img/img1.jpg" alt="Chania">
			    </div>

			    <div class="item">
			      <img src="/img/img2.jpg" alt="Chania">
			    </div>

			    <div class="item">
			      <img src="/img/img3.jpg" alt="Flower">
			    </div>

			    <div class="item">
			      <img src="/img/img4.jpg" alt="Flower">
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
		<div class="col-sm-2 col-md-2 col-lg-2">
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">
		<hr>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>


	</div>

	@endsection