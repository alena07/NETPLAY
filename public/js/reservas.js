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

function d(){
	var a = $("#datetime").val();
	alert(a);
}

// $("#form").on("submit", function(){

// 	var username = $("#username").val();

// 	$.ajax({
// 	method: "POST",
// 	url: "/js/adminIngresarDatos.php",
// 	dataType: 'json',
// 	data: { name: username }
// 	})

// 	.done(function(response) {
// 	$('#r').html(response);
// 	});

// 	return false;
// });