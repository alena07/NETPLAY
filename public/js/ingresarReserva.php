<?php

	$horaActual = $_POST['horaActual'];
	$fechaInicial = $_POST['fechaInicial'];
	$fechaFinal = $_POST['fechaFinal'];
	$horaInicial = $_POST['horaInicial'];
	$horaFinal = $_POST['horaFinal'];
	$idcancha = $_POST['idcancha'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		$sql = $conn->prepare('INSERT INTO reservas VALUES (null, :horaActual, "A", "correcto", "1", null, null)');
		$sql->bindParam("horaActual", $horaActual, PDO::PARAM_STR);
		$sql->execute();

		// $sql = $conn->prepare('SELECT * FROM reserva ORDER BY id DESC LIMIT 1');
		// $sql->execute();
		// $resultados = $sql->fetchAll();

		// foreach ($resultados as $resultado) {
		// 	$id = $resultado['id'];
		// };

		// $sql = $conn->prepare('INSERT INTO reservasCanchas VALUES (null, :fechaInicial :horaInicial, :fechaFinal :horaFinal, :id, :idcancha)');
		// $sql->bindParam("id", $id, PDO::PARAM_STR);
		// $sql->bindParam("fechaInicial", $fechaInicial, PDO::PARAM_STR);
		// $sql->bindParam("fechaFinal", $fechaFinal, PDO::PARAM_STR);
		// $sql->bindParam("horaInicial", $horaInicial, PDO::PARAM_STR);
		// $sql->bindParam("horaFinal", $horaFinal, PDO::PARAM_STR);
		// $sql->bindParam("idcancha", $idcancha, PDO::PARAM_STR);
		// $sql->execute();

		$html = "";
	
		$html .= "<p>Se ingreso la reserva correctamente</p>";

		echo json_encode($html)

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>