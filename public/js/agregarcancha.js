$( document ).ready(function() {

	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();
	var hours = hoy.getHours();

	if(dd < 10) {
	    dd='0'+dd
	} 

	if(mm < 10) {
	    mm='0'+mm
	} 

	if(hours < 10){
		hours='0'+hours
	}

	creado = $("#created_at")[0];
	creado.value = yyyy+'-'+mm+'-'+dd;
	actualizado = $("#updated_at")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

	$.ajax({
		method: "POST",
		url: "/js/mostrarLocalidad.php",
		dataType: 'json',
	})

	.done(function(response) {
		$('#localidad').html(response);
	});

});

$("#form").on("submit", function(){

	var localidad = $("#localidad").val();
	var nombre = $("#nombre").val();
	var valor = $("#valor").val();
	var imagen = $("#imagen").val();
	
	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var idusuario = $("#idUsuario").val();

	$.ajax({
		method: "POST",
		url: "/js/agregarcancha.php",
		dataType: 'json',
		data: { localidad: localidad, valor: valor, nombre: nombre, imagen: imagen, idusuario: idusuario, 
			created_at: created_at, updated_at: updated_at}
	})

	.done(function(response) {
alert(response);
		$('#respuesta').html(response);
		refrescar();
		
	});

	return false;

}); 