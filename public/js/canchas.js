$(document).ready(function(){

	canchas();
	
	$("img").click(function() {

		var cancha = $(this).attr("id");

		alert(cancha);

		$.ajax({
		method: "POST",
		url: "/js/mostrarDisponibilidadCanchas.php",
		dataType: 'json',
		data: { idcancha: cancha }
		})

		.done(function(response) {
			$('#r').html(response);
		});

	});

});

function disponibilidad(){


}

function canchas(){

	$.ajax({
		method: "POST",
		url: "/js/mostrarCanchas.php",
		dataType: 'json',
	})

	.done(function(response) {
		$('#canchas').html(response);
	});

}