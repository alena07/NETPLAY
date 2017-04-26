<?php

	$idcancha = $_POST['idcancha'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "123456");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM canchas, reservascanchas WHERE canchas.id = :idcancha and reservascanchas.cancha_id = :idcancha ORDER BY reservascanchas.fechaInicial');
		$sql->execute(array('idcancha' => $idcancha));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Hora Inicial</th>
				<th>Hora Final</th>
				</tr>
				</thead>
				<tbody>";
			    
		foreach ($resultados as $resultado) {
			$fechaInicial = $resultado['fechaInicial'];
			$fechaFinal = $resultado['fechaFinal'];

			$html .="<tr>";

			$html .="<td>$fechaInicial</td>
					<td>$fechaFinal</td>";

			$html .="</tr>";

		};

		$html .="</tbody>
				</table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>