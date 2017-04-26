<?php

	$horaActual = $_POST['horaActual'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		$sql = $conn->prepare('INSERT INTO reserva VALUES (null, :horaActual, "A", null, "1")');
		$sql->bindParam("horaActual", $horaActual, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM reserva ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO reservasCanchas VALUES (null, :horaInicial, :horaFinal, :id, :idcancha)');
		$sql->bindParam("id", $id, PDO::PARAM_STR);

		$sql->execute();

		$html = "";
	
		$html .= "<p>Ingreso</p>"



	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>