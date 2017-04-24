@extends('base.layout')

	@section('title', 'canchas')

	@section('content')
	
	<div class="col-sm-12 col-md-12 col-lg-12">

		@foreach($canchas as $cancha)

		<div class="col-sm-4 col-md-4 col-lg-4" >
			<a href="#" data-toggle="modal" data-target="#myModal" >
				<img id="{{ $cancha->id }}" class="img-responsive" src="{{ $cancha->img }}" alt="Not found">
			</a>
		</div>
			
		@endforeach

		{{-- Modal --}}
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
			    {{--  Modal content --}}
			    <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Modal Header</h4>
			        </div>
			        <div id="r" class="modal-body">
						<table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>Hora I.</th>
						        <th>Hora F.</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td></td>
						        <td></td>
						      </tr>
						    </tbody>
						</table>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			    </div>
		      
		    </div>
		</div>
		
	</div>



	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/canchas.js') }}"></script>

	@endsection