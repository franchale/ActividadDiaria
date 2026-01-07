<?php
	
	require 'conexion.php';
	
	/*
    $descripcion = $_POST['descripcion'];
	//$baja = isset($_POST['baja']) ? $_POST['baja'] : 0;
	$baja = $_POST['baja'];
	
	$sql = "INSERT INTO tipoactividad (Descripcion, Baja) VALUES ('$descripcion', '$baja')";
	$resultado = $mysqli->query($sql);
	*/

    $descripcion = $_POST['descripcion'];
	$baja = $_POST['baja'];
	
	$resultado = $mysqli->prepare("call spdepartamento_guardar('$descripcion', '$baja');");
	$resultado->execute();	
	
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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="departamento_abc.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
