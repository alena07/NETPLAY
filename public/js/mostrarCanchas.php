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

			$html .="<div class='col-sm-4 col-md-4 col-lg-4'>
					<a href='#'' data-toggle='modal' data-target='#myModal'>
					<img id='$id' class='img-responsive' src='$imagenCancha' alt='Not found'>
					</a>
					</div>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>