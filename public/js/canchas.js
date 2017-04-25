$(document).ready(function(){

	$.ajax({
		method: "POST",
		url: "/js/mostrarCanchas.php",
		dataType: 'json',
		})

		.done(function(response) {
		$('#canchas').html(response);
	});
});

// $("img").click(function() {

// 		var cancha = $(this).attr("id");

		// $.ajax({
		// method: "POST",
		// url: "/js/mostrarDisponibilidadCanchas.php",
		// dataType: 'json',
		// data: { idcancha: cancha }
		// })

		// .done(function(response) {
		// 	$('#modal').html(response);
		// });

// 	});	
