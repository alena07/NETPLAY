<?php
	
	$inicio = $_POST['inicio'];
	$fin = $_POST['fin'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT DATE(horareserva),porcentaje,DATE(fecha),valor FROM reservas,canchas,promociones,reservasCanchas WHERE reservas.id = reservasCanchas.reserva_id AND reservasCanchas.cancha_id = canchas.id AND (reservas.horareserva >= :inicio AND reservas.horareserva <= :fin) ORDER BY horareserva');
		$sql->execute(array('inicio' => $inicio, 'fin' => $fin));
		$resultados = $sql->fetchAll();
		$html = "";
		$cont = 1;
		$suma = 0;

		$html .="<div class='col-sm-12 col-md-12 col-lg-12' style='background-color: #FEFEFE;'>
				<br>";

		foreach ($resultados as $resultado) {

			$horareserva = $resultado['DATE(horareserva)'];
			$porcentaje = $resultado['porcentaje'];
			$fecha = $resultado['DATE(fecha)'];
			$valor = $resultado['valor'];

			if($horareserva == $fecha){

				$descuento = ($valor*$porcentaje)/100;

				$total = $valor - $descuento;

				$html .= "<p style='font-size: 18px'>En la fecha <b>$horareserva</b> se realizo una reserva con valor de <b>$ $valor</b> con un descuento del <b>$porcentaje</b> el total fue: <b>$ $total</b></p>";

				$suma = $suma + $total;

			}else{

				$html .= "<p style='font-size: 18px'>En la fecha <b>$horareserva</b> se realizo una reserva con un total de <b>$ $valor</b></p>";	

				$suma = $suma + $valor;

			}
				
		};

		$html .="<hr>
				<p style='font-size: 18px'><b>El total ganado fue: $ $suma</b></p>
				<br>
				</div>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>