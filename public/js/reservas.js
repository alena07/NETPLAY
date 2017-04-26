$( document ).ready(function() {

	$.ajax({
		method: "POST",
		url: "/js/mostrarLocalidad.php",
		dataType: 'json',
	})

	.done(function(response) {
		$('#localidad').html(response);
	});

});

function mostrarCanchas() {

	var idlocal = $("#localidad").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarCanchasSelect.php",
		dataType: 'json',
		data: { idlocal: idlocal}
	})

	.done(function(response) {
		$('#cancha').html(response);
	});

}

$("#form").on("submit", function(){

	var horaActual = $("#horaActual").val();
	var fechaInicial = $("#fechaInicial").val();
	var fechaFinal = $("#fechaFinal").val();
	var horaInicial = $("#horaInicial").val();
	var horaFinal = $("#horaFinal").val();
	var idcancha = $("#cancha").val();

	$.ajax({
	method: "POST",
	url: "/js/ingresarReserva.php",
	dataType: 'json',
	data: { horaActual: horaActual, fechaInicial: fechaInicial, fechaFinal: fechaFinal,
	 horaInicial: horaInicial, horaFinal: horaFinal, idcancha: idcancha}
	})

	.done(function(response) {
		$('#respuesta').html(response);
		// alert("llego");
	});

	return false;
});