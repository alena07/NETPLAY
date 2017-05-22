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

	if(hours < 12){
		hours='0'+hours
	}

	horaInicial = $("#horaInicial")[0];
	horaInicial.value = hours+':'+"00";
	horaFinal = $("#horaFinal")[0];
	horaFinal.value = (hours+1)+':'+"00";

	fechaInicial = $("#fechaInicial")[0];
	fechaInicial.value = yyyy+'-'+mm+'-'+dd;
	fechaFinal = $("#fechaFinal")[0];
	fechaFinal.value = yyyy+'-'+mm+'-'+dd;
	fechaReserva = $("#fechaReserva")[0];
	fechaReserva.value = yyyy+'-'+mm+'-'+dd;
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

function mostrarFechaFinal(){

	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	var fechaInicial = $("#fechaInicial").val();

	var validarAño = parseInt(fechaInicial.substr(0,4));
	var validarMes = parseInt(fechaInicial.substr(6,6));
	var validarDia = parseInt(fechaInicial.substr(8,8));

	if(validarAño > yyyy || validarAño < yyyy){

		$('#respuesta').html("<p>Año incorrecto</p>");
		$('#fechaFinal').val("dd-mm-yyyy");

	}else if(validarMes < mm){

		$('#respuesta').html("<p>Mes incorrecto</p>");
		$('#fechaFinal').val("dd-mm-yyyy");

	}else if(validarDia < dd){

		$('#respuesta').html("<p>Dia incorrecto</p>");
		$('#fechaFinal').val("dd-mm-yyyy");

	}else{

		$('#respuesta').html("<p></p>");
		$('#fechaFinal').val(fechaInicial);

	}	

}

function mostrarHoraFinal(){

	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();
	var hours = hoy.getHours();

	var horaInicial = $("#horaInicial").val();

	var validarHora = parseInt(horaInicial.substr(0,4));
	var validarMinutos = parseInt(horaInicial.substr(4,6));

	var fechaInicial = $("#fechaInicial").val();

	var validarAño = parseInt(fechaInicial.substr(0,4));
	var validarMes = parseInt(fechaInicial.substr(6,6));
	var validarDia = parseInt(fechaInicial.substr(8,8));

	if(validarHora < 9){
		validarHora = '0'+validarHora;
	}
	if(validarMinutos > "0"){

		$('#horaInicial').val(validarHora+':'+"00");

	}

	if(validarDia > dd || validarMes > mm){

		if(validarHora < 9){

		$('#horaFinal').val('0'+(validarHora+1)+':'+"00");

		}else if(validarHora == "23"){

			$('#horaFinal').val("00"+':'+"00");

		}else{

			$('#respuesta').html("<p></p>");
			$('#horaFinal').val((validarHora+1)+':'+"00");

		}

	}else if(validarHora < hours || validarHora == hours){

		$('#respuesta').html("<p>Hora incorrecta</p>");
		$('#horaFinal').val("hh"+':'+"mm");

	}else if(validarHora < 9){

		$('#horaFinal').val('0'+(validarHora+1)+':'+"00");

	}else if(validarHora == "23"){

		$('#horaFinal').val("00"+':'+"00");

	}else{

		$('#respuesta').html("<p></p>");
		$('#horaFinal').val((validarHora+1)+':'+"00");

	}
	
}

$("#form").on("submit", function(){

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

	var fechaReserva = $("#fechaReserva").val();
	var fechaInicial = $("#fechaInicial").val();
	var fechaFinal = $("#fechaFinal").val();
	var horaInicial = $("#horaInicial").val();
	var horaFinal = $("#horaFinal").val();
	var idlocal = $("#localidad").val();
	var idcancha = $("#cancha").val();
	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var idUsuario = $("#idUsuario").val();

	var validarAño = parseInt(fechaInicial.substr(0,4));
	var validarMes = parseInt(fechaInicial.substr(6,6));
	var validarDia = parseInt(fechaInicial.substr(8,8));
	var validarHora = parseInt(horaInicial.substr(0,4));

	if(idlocal == "Seleccione"){

		$('#respuesta').html("<p>Por favor seleccione una localidad</p>");
		return false;

	}else if(idcancha == "Seleccione"){

		$('#respuesta').html("<p>Por favor seleccione una cancha</p>");
		return false;

	}else if(validarAño > yyyy || validarAño < yyyy || validarAño == "yyyy-mm-dd"){

		$('#respuesta').html("<p>Por favor seleccione otro año disponible</p>");
		return false;

	}else if(validarMes < mm){

		$('#respuesta').html("<p>Por favor seleccione otro mes disponible</p>");
		return false;

	}else if(validarDia < dd){

		$('#respuesta').html("<p>Por favor seleccione otro dia disponible</p>");
		return false;

	}else if((validarHora < hours || validarHora == hours) && (validarDia < dd || validarDia == dd)){

		$('#respuesta').html("<p>Por favor seleccione otra hora disponible</p>");
		return false;

	}else if((validarHora < hours || validarHora == hours) && (validarMes < mm || validarDia == dd)){

		$('#respuesta').html("<p>Por favor seleccione otra hora disponible</p>");
		return false;

	}else{

		$.ajax({
		method: "POST",
		url: "/js/ingresarReserva.php",
		dataType: 'json',
		data: { fechaReserva: fechaReserva, fechaInicial: fechaInicial, fechaFinal: fechaFinal,
		 horaInicial: horaInicial, horaFinal: horaFinal, idcancha: idcancha, created_at: created_at,
		 updated_at: updated_at, idUsuario: idUsuario }
		})

		.done(function(response) {
			$('#respuesta').html(response);
			// $('#form').trigger("reset");
		});

		return false;

		}

});