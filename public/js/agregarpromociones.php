<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$cancha = $_POST['cancha'];
	$fecha = $_POST['fecha'];
	$descuento = $_POST['descuento'];
	$descripcion = $_POST['descripcion'];
	$idusuario = $_POST['idusuario'];

	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];	

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM promociones WHERE fecha = :fecha AND cancha_id = :cancha');
		$sql->execute(array('fecha' => $fecha, 'cancha' => $cancha));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

			$sql = $conn->prepare('INSERT INTO promociones VALUES (null, :fecha, :descripcion, :descuento, :cancha, :created_at, :updated_at)');
			$sql->bindParam("fecha", $fecha, PDO::PARAM_STR);
			$sql->bindParam("cancha", $cancha, PDO::PARAM_STR);
			$sql->bindParam("descuento", $descuento, PDO::PARAM_STR);
			$sql->bindParam("descripcion", $descripcion, PDO::PARAM_STR);
			$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
			$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
			$sql->execute();

			$html = "Se registraro correctamente la cancha";

		}else{

			$html = "Ya se encuentra registrado esta cancha";

		}

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>