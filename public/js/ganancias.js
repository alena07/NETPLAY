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

	fechaInicial = $("#fechaInicial")[0];
	fechaInicial.value = yyyy+'-'+mm+'-'+dd;

	fechaFinal = $("#fechaFinal")[0];
	fechaFinal.value = yyyy+'-'+mm+'-'+dd;

	inicio = $("#fechaInicial").val();
	fin = $("#fechaFinal").val();

	$.ajax({
	method: "POST",
	url: "/js/mostrarGanancias.php",
	dataType: 'json',
	data: { inicio: inicio, fin: fin }
	})

	.done(function(response) {
		$('#total').html(response);
	});

	return false;

});

$("#form").on("submit", function(){

	inicio = $("#fechaInicial").val();
	fin = $("#fechaFinal").val();

	if(fin < inicio){

		$('#respuesta').html("Por favor seleccione bien las fechas");

		$.ajax({
		method: "POST",
		url: "/js/mostrarGanancias.php",
		dataType: 'json',
		data: { inicio: inicio, fin: fin }
		})

		.done(function(response) {
			$('#total').html(response);
		});

		return false;

	}else{

		$('#respuesta').html(" ");

		$.ajax({
		method: "POST",
		url: "/js/mostrarGanancias.php",
		dataType: 'json',
		data: { inicio: inicio, fin: fin }
		})

		.done(function(response) {
			alert(response);
			$('#total').html(response);
		});

		return false;

	}

});