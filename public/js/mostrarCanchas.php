<?php

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM localidades,canchas WHERE localidades.id = canchas.localidad_id');
		$sql->execute();
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$imagenCancha = $resultado['imagenCancha'];
			$numeroCancha = $resultado['numeroCancha'];
			$nombre = $resultado['nombre'];
			$direccion = $resultado['direccion'];
			$telefono = $resultado['telefono'];


			$html .="<input id='idCancha' type='text' value='$id' style='display :none;'>
					<div id='$id' class='col-sm-4 col-md-4 col-lg-4'>
					<b><h1 class='cancha-titulo'>$numeroCancha</h1></b>
					<a href='#' data-toggle='modal' data-target='#myModal'>
					<img id='$id' src='$imagenCancha' alt='Not found' width='400px' height='250px'>
					</a>
					<h3 style='margin-top: 2%; margin-bottom: 0px'><b>Local:</b> <spam>$nombre</spam></h3>
					<h3 style='margin-top: 0px; margin-bottom: 0px'><b>Dirección:</b> <spam>$direccion</spam></h3>
					<h3 style='margin-top: 0px'><b>Telefono:</b> <spam>$telefono</spam></h3>

					</div>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>