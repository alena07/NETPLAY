<?php
	
	$inicio = $_POST['inicio'];
	$fin = $_POST['fin'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=netplay', "root", "123456");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT DATE(fecha),precio,descuento,valor FROM ganancias,canchas,reservasCanchas WHERE ganancias.reservaCancha_id = reservasCanchas.id AND reservasCanchas.cancha_id = canchas.id AND (ganancias.fecha >= :inicio AND ganancias.fecha <= :fin) ORDER BY fecha');
		$sql->execute(array('inicio' => $inicio, 'fin' => $fin));
		$resultados = $sql->fetchAll();
		$html = "";
		$cont = 1;
		$suma = 0;
		$mostrar = False;
		$comparar = 0;
		$f = "";
		$guardar = "";

		$html .="<div class='col-sm-12 col-md-12 col-lg-12' style='background-color: #FEFEFE;'>
				<br>";

		foreach ($resultados as $resultado) {

			$mostrar = True;

			$valor = $resultado['valor'];
			$fecha = $resultado['DATE(fecha)'];
			$descuento = $resultado['descuento'];
			$precio = $resultado['precio'];

			if($descuento != "0%"){
				
				$suma = $suma + $precio;

				if($comparar != $fecha && $comparar != 0){

					$cont++;

					$html .= "<p style='font-size: 18px'>En la fecha <b>$fecha</b> se realizo una reserva con valor de <b>$ $valor</b> con un descuento del <b>$descuento</b> el total fue: <b>$ $precio * $cont</b></p>";

					$cont = 1;

				}else if($comparar == $fecha){

					$cont++;

				}

				$comparar = $fecha;

				
			}else{
		
				$suma = $suma + $precio;

				// $html .="<p>$comparar $fecha</p>";
			
				if($comparar != $fecha && $comparar != 0){

					$html .= "<p style='font-size: 18px'>En la fecha <b>$comparar</b> se realizo una reserva con un total de <b>$ $precio * $cont</b></p>";

					$cont = 1;

				}else if($comparar == $fecha){

					$cont++;

				}

				$comparar = $fecha;
			}
				
		};

		$sql = $conn->prepare('SELECT DATE(fecha),precio,descuento,valor FROM ganancias,canchas,reservasCanchas WHERE ganancias.reservaCancha_id = reservasCanchas.id AND reservasCanchas.cancha_id = canchas.id AND (ganancias.fecha >= :inicio AND ganancias.fecha <= :fin) ORDER BY fecha ASC LIMIT 1');
		$sql->execute(array('inicio' => $inicio, 'fin' => $fin));
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {

		$mostrar = True;

		$valor = $resultado['valor'];
		$fecha = $resultado['DATE(fecha)'];
		$descuento = $resultado['descuento'];
		$precio = $resultado['precio'];

			if($descuento != "0%"){
				
				$suma = $suma + $precio;

				if($comparar != $fecha && $comparar != 0){

					$cont++;

					$html .= "<p style='font-size: 18px'>En la fecha <b>$fecha</b> se realizo una reserva con valor de <b>$ $valor</b> con un descuento del <b>$descuento</b> el total fue: <b>$ $precio * $cont</b></p>";

					$cont = 1;

				}else if($comparar == $fecha){

					$cont++;

				}

				$comparar = $fecha;

					
			}else{
		
				$suma = $suma + $precio;

				// $html .="<p>$comparar $fecha</p>";
			
				if($comparar != $fecha && $comparar != 0){

					$html .= "<p style='font-size: 18px'>En la fecha <b>$comparar</b> se realizo una reserva con un total de <b>$ $precio * $cont</b></p>";

					$cont = 1;

				}else if($comparar == $fecha){

					$cont++;

				}

				$comparar = $fecha;
			}
				
		};


		if($mostrar == True){

		$html .="<hr>
				<p style='font-size: 18px'><b>El total ganado fue: $ $suma</b></p>
				<br>
				</div>";

		}else{

		$html .="</div>";
		}

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>