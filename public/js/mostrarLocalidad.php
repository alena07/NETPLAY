<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM localidades ORDER BY nombre');
		$sql->execute();
		$resultados = $sql->fetchAll();
		$html = "";

		$html .= "<option>Seleccione</option>";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$nombre = $resultado['nombre'];

			$html .= "<option value='$id'>$nombre</option>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>