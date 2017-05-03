<?php

	$idcancha = $_POST['idcancha'];
	$fechaBusqueda = $_POST['fechaBusqueda'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT usuario,TIME(fechaInicial) FROM personas,reservas,canchas,reservasCanchas WHERE personas.id = reservas.persona_id AND canchas.id = :idcancha AND reservascanchas.cancha_id = :idcancha AND DATE(fechaInicial) = :fechaBusqueda ORDER BY fechaInicial');
		$sql->execute(array('idcancha' => $idcancha, 'fechaBusqueda' => $fechaBusqueda));
		$resultados = $sql->fetchAll();
		$html = "";

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

			$html .="<tr>
					<td>00:00 A.M - 01:00 A.M</td>";

			if($fechaInicial == "00:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>01:00 A.M - 02:00 A.M</td>";	

			if($fechaInicial == "01:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>02:00 A.M - 03:00 A.M</td>";	

			if($fechaInicial == "02:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>03:00 A.M - 04:00 A.M</td>";	

			if($fechaInicial == "03:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>04:00 A.M - 05:00 A.M</td>";	

			if($fechaInicial == "04:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>05:00 A.M - 06:00 A.M</td>";	

			if($fechaInicial == "05:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>06:00 A.M - 07:00 A.M</td>";	

			if($fechaInicial == "06:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>07:00 A.M - 08:00 A.M</td>";	

			if($fechaInicial == "07:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>08:00 A.M - 09:00 A.M</td>";	

			if($fechaInicial == "08:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>09:00 A.M - 10:00 A.M</td>";	

			if($fechaInicial == "9:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>10:00 A.M - 11:00 A.M</td>";	

			if($fechaInicial == "10:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>11:00 A.M - 12:00 P.M</td>";	

			if($fechaInicial == "11:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>12:00 P.M - 01:00 P.M</td>";	

			if($fechaInicial == "12:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>01:00 P.M - 02:00 P.M</td>";	

			if($fechaInicial == "13:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>02:00 P.M - 03:00 P.M</td>";	

			if($fechaInicial == "14:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>03:00 P.M - 04:00 P.M</td>";	

			if($fechaInicial == "15:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>04:00 P.M - 05:00 P.M</td>";	

			if($fechaInicial == "16:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>05:00 P.M - 06:00 P.M</td>";	

			if($fechaInicial == "17:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>06:00 P.M - 07:00 P.M</td>";	

			if($fechaInicial == "18:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>07:00 P.M - 08:00 P.M</td>";	

			if($fechaInicial == "19:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>08:00 P.M - 09:00 P.M</td>";	

			if($fechaInicial == "20:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>09:00 P.M - 10:00 P.M</td>";	

			if($fechaInicial == "21:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>10:00 P.M - 11:00 P.M</td>";	

			if($fechaInicial == "22:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>
					<td>11:00 P.M - 00:00 A.M</td>";	

			if($fechaInicial == "23:00:00"){

			$html .="<td>Ocupada</td>
					<td>$usuario</td>";

			}else{

			$html .="<td>Disponible</td>
					<td></td>";

			}

			$html .="</tr>
					<tr>";

		};

		$html .="</tbody>
				</table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>