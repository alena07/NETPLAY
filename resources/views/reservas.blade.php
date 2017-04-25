@extends('base.layout')

	@section('title', 'reserva')

	@section('content')

		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<form id="form">
				</form>
			</div>
		</div>

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/canchas.js') }}"></script>

	@endsection