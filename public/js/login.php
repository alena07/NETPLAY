<?php
	
	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$username = $_POST['username'];
	$password = $_POST['password'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM personas WHERE (usuario = :username AND contrasenia = :password)');
		$sql->execute(array('username' => $username, 'password' => $password));
		$resultados = $sql->fetchAll();
		$tipo = "no se encuentra";

		foreach ($resultados as $resultado) {	
			$tipo = $resultado['tipo'];	
		};

		echo json_encode($tipo);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>