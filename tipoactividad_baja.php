<?php

	require 'conexion.php';

    $id = $_GET['id'];
	
/* 	$sql = "UPDATE TipoActividad SET Baja = '1' WHERE TipoActividadId = '$id '";
	$resultado = $mysqli->query($sql); */
	
	$resultado = $mysqli->prepare("call sptipoactividad_baja('$id');");
	$resultado->execute();
	
	/* if ($resultado == false) {
		echo("Error! Al dar de baja.");
		$resultado->close();
	} else {
		echo("Exito! Al dar de baja.");
		$resultado->close();
	} */
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>EL REGISTRO HA SIDO DADO DE BAJA CON EXITO</h3>
				<?php } else { ?>
				<h3>ERROR AL TRATAR DE DAR DE BAJA EL REGISTRO</h3>
				<?php $resultado->close(); } ?>
				
				<a href="tipoactividad_abc.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
