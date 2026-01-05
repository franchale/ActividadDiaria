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
				<h3 style="text-align:center">ACTIVIDAD DIARIRA - TIPO DE ACTIVIDAD - NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="tipoactividad_guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" required>
					</div>
				</div>
				
							
				<div class="form-group">
					<label for="baja" class="col-sm-2 control-label">¿Baja?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="baja" name="baja" value="1"> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="baja" name="baja" value="0" checked> NO
						</label>
					</div>
				</div>
							
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="tipoactividad_abc.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>