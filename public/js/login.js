$("#form").on("submit", function(){

	var username = $("#username").val();
	var password = $("#password").val();
		
	$.ajax({
		method: "POST",
		url: "/js/login.php",
		dataType: 'json',
		data: { username: username, password: password }
	})

	.done(function(response) {

		if(response == "A"){

			location.href="/inicio";

		}else if(response == "C"){

			location.href="/user/principal";

		}else{

			$('#respuesta').html("Usuario o contraseña incorrecta");

		}
	});

	return false;

}); 