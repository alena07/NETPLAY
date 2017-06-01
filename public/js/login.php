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

		$conn = new PDO("pgsql:host=ec2-23-23-234-118.compute-1.amazonaws.com; dbname=d2durqe293ofor", "txsulhszxbixwo", "0ab5407d1cf3637134725758d4c9c4297661446d56f7c5256967cc05e6131123");
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