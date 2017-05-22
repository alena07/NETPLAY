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

	fechaBusqueda2 = $("#fechaBusqueda2")[0];
	fechaBusqueda2.value = yyyy+'-'+mm+'-'+dd;

	inicio = $("#fechaBusqueda").val();
	fin = $("#fechaBusqueda2").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarPromociones.php",
		dataType: 'json',
		data: { inicio: inicio, fin: fin }
		})

		.done(function(response) {

		$('#promociones').html(response);
	});

});

function BuscarTodo(){

	inicio = $("#fechaBusqueda").val();
	fin = $("#fechaBusqueda2").val();

	if(fin < inicio){

		$('#respuesta').html("Por favor seleccione bien las fechas");

		$.ajax({
			method: "POST",
			url: "/js/mostrarPromociones.php",
			dataType: 'json',
			data: { inicio: inicio, fin: fin}
			})

			.done(function(response) {
				
				$('#promociones').html(response);
			});

	}else{

		$('#respuesta').html(" ");

		$.ajax({
			method: "POST",
			url: "/js/mostrarPromociones.php",
			dataType: 'json',
			data: { inicio: inicio, fin: fin}
			})

			.done(function(response) {
				
				$('#promociones').html(response);
			});

	}

}