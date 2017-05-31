<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');
	
	$inicio = $_POST['inicio'];
	$fin = $_POST['fin'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT DATE(fecha),descripcion,porcentaje,nombre,numerocancha,direccion,telefono,imagenCancha FROM localidades,canchas,promociones WHERE localidades.id = canchas.localidad_id AND canchas.id = promociones.cancha_id AND (promociones.fecha >= :inicio AND promociones.fecha <= :fin)');
		$sql->execute(array('inicio' => $inicio, 'fin' => $fin));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {

			$fecha = $resultado['DATE(fecha)'];
			$descripcion = $resultado['descripcion'];
			$porcentaje = $resultado['porcentaje'];
			$nombre = $resultado['nombre'];
			$numerocancha = $resultado['numerocancha'];
			$direccion = $resultado['direccion'];
			$telefono = $resultado['telefono'];
			$imagenCancha = $resultado['imagenCancha'];


			$html .="
					<div style='background-image: url(../img/fondopromociones.jpg); color: #000000; box-shadow: 1px 3px 7px #888888;' class='col-sm-6 col-md-6 col-lg-6'>
					<h1>$fecha</h1>
					<h2>$descripcion</h2>
					<h3>$porcentaje de descuento en la cancha $numerocancha ubicada en $direccion</h3>
					<h3>Para mas información comuniquese al $telefono</h3>
					</div>";

			$html .="<div class='col-sm-6 col-md-6 col-lg-6'>
					<img src='$imagenCancha' alt='Not found' width='500px' height='240px'>
					</div>

					<div class='col-sm-12 col-md-12 col-lg-12'></div>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>