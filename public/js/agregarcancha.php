<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$localidad = $_POST['localidad'];
	$nombre = $_POST['nombre'];
	// $imagen = $_POST['imagen'];
	$valor = $_POST['valor'];
	$idusuario = $_POST['idusuario'];

	$ruta="./imagenes/";//ruta carpeta donde queremos copiar las imágenes 
	$uploadfile_temporal=$_FILES['fichero']['tmp_name']; 
	$uploadfile_nombre=$ruta.$_FILES['fichero']['name']; 


	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];	

	try{

		// $conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// $sql = $conn->prepare('SELECT * FROM canchas WHERE numeroCancha = :nombre AND localidad_id = :localidad');
		// $sql->execute(array('nombre' => $nombre, 'localidad' => $localidad));
		// $resultados = $sql->fetchAll();
		// $ban = False;

		// foreach ($resultados as $resultado) {
		// 	$ban = True;
		// };

		// if($ban == False){

		// 	$sql = $conn->prepare('INSERT INTO demografias VALUES (null, :nombre, :imagen, "D", :valor, :localidad, :created_at, :updated_at)');
		// 	$sql->bindParam("nombre", $nombre, PDO::PARAM_STR);
		// 	$sql->bindParam("localidad", $localidad, PDO::PARAM_STR);
		// 	$sql->bindParam("valor", $valor, PDO::PARAM_STR);
		// 	$sql->bindParam("imagen", $imagen, PDO::PARAM_STR);
		// 	$sql->bindParam("numPerMen", $numPerMen, PDO::PARAM_STR);
		// 	$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		// 	$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		// 	$sql->execute();

		// 	$html = "Se registraro correctamente la cancha";

		// }else{

		// 	$html = "Ya se encuentra registrado esta cancha";

		// }

		echo json_encode($uploadfile_nombre);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>