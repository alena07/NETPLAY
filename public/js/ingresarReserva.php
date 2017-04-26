<?php

	$horaActual = $_POST['horaActual'];
	$fechaInicial = $_POST['fechaInicial'];
	$fechaFinal = $_POST['fechaFinal'];
	$horaInicial = $_POST['horaInicial'];
	$horaFinal = $_POST['horaFinal'];
	$idcancha = $_POST['idcancha'];

	$inicial = "$fechaInicial $horaInicial";
	$final = "$fechaFinal $horaFinal";

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "123456");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('INSERT INTO reservas VALUES (null, :horaActual, "A", "correcto", "1", null, null)');
		$sql->bindParam("horaActual", $horaActual, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM reservas ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$idReserva = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO reservasCanchas VALUES (null, :inicial, :final, :idReserva, :idcancha, null, null)');
		$sql->bindParam("idReserva", $idReserva, PDO::PARAM_STR);
		$sql->bindParam("inicial", $inicial, PDO::PARAM_STR);
		$sql->bindParam("final", $final, PDO::PARAM_STR);
		$sql->bindParam("idcancha", $idcancha, PDO::PARAM_STR);
		$sql->execute();
	
		$html = "<p style='color: #008000'>Se ingreso la reserva correctamente</p>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>