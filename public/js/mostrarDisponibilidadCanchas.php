<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idcancha = $_POST['idcancha'];
	$fechaBusqueda = $_POST['fechaBusqueda'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT usuario,TIME(fechaInicial) FROM personas,reservas,reservasCanchas WHERE personas.id = reservas.persona_id AND reservasCanchas.cancha_id = :idcancha AND reservascanchas.reserva_id = reservas.id AND DATE(fechaInicial) = :fechaBusqueda ORDER BY fechaInicial');
		$sql->execute(array('idcancha' => $idcancha, 'fechaBusqueda' => $fechaBusqueda));
		$resultados = $sql->fetchAll();
		$html = "";
		$cont = 0;
		$cont2 = 0;
		$temporal2 = 0;
		$cont3 = 1;
		$temporal3 = 1;

		$html .="<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Reserva</th>
				<th>Disponibilidad</th>
				<th>Usuario</th>
				</tr>
				</thead>
				<tbody>";
			    
		foreach ($resultados as $resultado) {
			$usuario = $resultado['usuario'];
			$fechaInicial = $resultado['TIME(fechaInicial)'];

			for ($i = 0; $cont <= 23; $i++) {
				if($cont < 10){
					$comprobar = "0".$cont.":"."00:00";
				}else{
					$comprobar = $cont.":"."00:00";
				}
				if($cont2 <= 9){
					if($cont3 == 10){
					$horaInicial = "0".$cont2.":"."00 AM";
					$horaFinal = "10".":"."00 AM";
					}else{
					$horaInicial = "0".$cont2.":"."00 AM";
					$horaFinal = "0".$cont3.":"."00 AM";
					}
				}else if($cont2 >= 10 and $cont2 <= 12){
					if($cont3 == 13){
					$horaInicial = $cont2.":"."00 PM";
					$horaFinal = "01".":"."00 PM";
					}else if($cont3 == 12){
					$horaInicial = $cont2.":"."00 AM";
					$horaFinal = $cont3.":"."00 PM";
					}else{
					$horaInicial = $cont2.":"."00 AM";
					$horaFinal = $cont3.":"."00 AM";
					}
				}else if($cont2 >= 13 and $cont2 <= 21){
					if($cont3 == 22){
					$temporal2++;
					$temporal3++;
					$horaInicial = "0".$temporal2.":"."00 PM";
					$horaFinal = "10".":"."00 PM";
					}else{
					$temporal2++;
					$temporal3++;
					$horaInicial = "0".$temporal2.":"."00 PM";
					$horaFinal = "0".$temporal3.":"."00 PM";
					}
				}else{
					if($cont3 ==24){
					$temporal2++;
					$temporal3++;
					$horaInicial = $temporal2.":"."00 PM";
					$horaFinal = "00".":"."00 AM";
					}else{
					$temporal2++;
					$temporal3++;
					$horaInicial = $temporal2.":"."00 PM";
					$horaFinal = $temporal3.":"."00 PM";
					}
				}
					$html .="<tr>
							<td> $horaInicial - $horaFinal</td>";
			    if($fechaInicial == $comprobar){
			    	$html .="<td>Ocupada</td>
							<td>$usuario</td>";

					$cont++;
				    $cont2++;
				    $cont3++;

					break;
			    }else{
			    	$html .="<td>Disponible</td>
					<td></td>";

					$cont++;
				    $cont2++;
				    $cont3++;
			    }
			    
			}
		};

		if($cont <= 23){
			for ($i = 0; $cont <= 23; $i++) {
				if($cont < 10){
					$comprobar = "0".$cont.":"."00:00";
				}else{
					$comprobar = $cont.":"."00:00";
				}
				if($cont2 <= 9){
					if($cont3 == 10){
					$horaInicial = "0".$cont2.":"."00 AM";
					$horaFinal = "10".":"."00 AM";
					}else{
					$horaInicial = "0".$cont2.":"."00 AM";
					$horaFinal = "0".$cont3.":"."00 AM";
					}
				}else if($cont2 >= 10 and $cont2 <= 12){
					if($cont3 == 13){
					$horaInicial = $cont2.":"."00 PM";
					$horaFinal = "01".":"."00 PM";
					}else if($cont3 == 12){
					$horaInicial = $cont2.":"."00 AM";
					$horaFinal = $cont3.":"."00 PM";
					}else{
					$horaInicial = $cont2.":"."00 AM";
					$horaFinal = $cont3.":"."00 AM";
					}
				}else if($cont2 >= 13 and $cont2 <= 21){
					if($cont3 == 22){
					$temporal2++;
					$temporal3++;
					$horaInicial = "0".$temporal2.":"."00 PM";
					$horaFinal = "10".":"."00 PM";
					}else{
					$temporal2++;
					$temporal3++;
					$horaInicial = "0".$temporal2.":"."00 PM";
					$horaFinal = "0".$temporal3.":"."00 PM";
					}
				}else{
					if($cont3 ==24){
					$temporal2++;
					$temporal3++;
					$horaInicial = $temporal2.":"."00 PM";
					$horaFinal = "00".":"."00 AM";
					}else{
					$temporal2++;
					$temporal3++;
					$horaInicial = $temporal2.":"."00 PM";
					$horaFinal = $temporal3.":"."00 PM";
					}
				}
					$html .="<tr>
							<td> $horaInicial - $horaFinal</td>";
			    	$html .="<td>Disponible</td>
							<td></td>";
			    $cont++;
			    $cont2++;
			    $cont3++;
			}
		}

		$html .="</tbody>
				</table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>