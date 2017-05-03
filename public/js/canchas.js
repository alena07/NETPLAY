$(document).ready(function(){

	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd < 10) {
	    dd='0'+dd
	} 

	if(mm < 10) {
	    mm='0'+mm
	} 

	fechaBusqueda = $("#fechaBusqueda")[0];
	fechaBusqueda.value = yyyy+'-'+mm+'-'+dd;

	$.ajax({
		method: "POST",
		url: "/js/mostrarCanchas.php",
		dataType: 'json',
		})

		.done(function(response) {
		$('#canchas').html(response);
	});

	$("#canchas").on("click", "img", function(){

	var cancha = $(this).attr("id");

		BuscarTodo();

	});	
});

function BuscarTodo(){

	var cancha = $("#idCancha").val();
	var fechaBusqueda = $("#fechaBusqueda").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarDisponibilidadCanchas.php",
		dataType: 'json',
		data: { idcancha: cancha, fechaBusqueda: fechaBusqueda }
		})

		.done(function(response) {
			$('#modal').html(response);
		});

}
