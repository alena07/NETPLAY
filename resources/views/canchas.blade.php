@extends('base.layout')

	@section('title', 'canchas')

	@section('content')
	
	<div id="canchas" class="col-sm-12 col-md-12 col-lg-12">
		
	</div>

	{{-- Modal --}}
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog modal-lg">
		    
			    {{--  Modal content --}}
			    <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Horario</h4>
			          <input type="date" id="fechaBusqueda" oninput="BuscarTodo()">
			        </div>
			        <div id="modal" class="modal-body">
						<table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>Hora Inicial</th>
						        <th>Hora Final</th>
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

	@endsection

	@section('javascript')
		
		<script src="{{ asset('js/canchas.js') }}"></script>

	@endsection