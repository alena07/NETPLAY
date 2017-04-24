$(document).ready(function(){

	$("img").click(function() {

		var cancha = $(this).attr("id");

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