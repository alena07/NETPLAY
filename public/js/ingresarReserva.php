<?php

	$fechaReserva = $_POST['fechaReserva'];
	$fechaInicial = $_POST['fechaInicial'];
	$fechaFinal = $_POST['fechaFinal'];
	$horaInicial = $_POST['horaInicial'];
	$horaFinal = $_POST['horaFinal'];
	$idcancha = $_POST['idcancha'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];
	$idUsuario = $_POST['idUsuario'];

	$inicial = "$fechaInicial $horaInicial";
	$final = "$fechaFinal $horaFinal";

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT fechaInicial FROM reservasCanchas WHERE fechaInicial = :inicial');
		$sql->execute(array('inicial' => $inicial));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO reservas VALUES (null, :fechaReserva, "A", "correcto", :idUsuario, :created_at, :updated_at)');
		$sql->bindParam("fechaReserva", $fechaReserva, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->bindParam("idUsuario", $idUsuario, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM reservas ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$idReserva = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO reservasCanchas VALUES (null, :inicial, :final, :idReserva, :idcancha, :created_at, :updated_at)');
		$sql->bindParam("idReserva", $idReserva, PDO::PARAM_STR);
		$sql->bindParam("inicial", $inicial, PDO::PARAM_STR);
		$sql->bindParam("final", $final, PDO::PARAM_STR);
		$sql->bindParam("idcancha", $idcancha, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();
	
		$html = "<p style='color: #008000'>Se ingreso la reserva correctamente</p>";

		}else{

			$html = "<p style='color: #008000'>Ya hay una reserva con esta fecha</p>";

		}

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>