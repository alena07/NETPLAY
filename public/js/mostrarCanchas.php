<?php

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM localidades,canchas ORDER BY numeroCancha');
		$sql->execute();
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$imagenCancha = $resultado['imagenCancha'];
			$numeroCancha = $resultado['numeroCancha'];
			$nombre = $resultado['nombre'];
			$direccion = $resultado['direccion'];

			$html .="<div class='col-sm-4 col-md-4 col-lg-4'>
					<b><h1>$numeroCancha</h1></b>
					<a href='#' data-toggle='modal' data-target='#myModal'>
					<img id='$id' class='img-responsive' src='$imagenCancha' alt='Not found'>
					</a>
					<h3 style='margin-top: 2%; margin-bottom: 0px'>Local: $nombre</h3>
					<h3 style='margin-top: 0px'>Dirección: $direccion</h3>
					</div>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>