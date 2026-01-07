<?php
	require 'conexion.php';
	
    $sql = "SELECT DepartamentoId, Descripcion FROM departamento where baja = 0 ORDER BY descripcion ASC";
    $resultado = $mysqli->query($sql);
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
				<h3 style="text-align:center">ACTIVIDAD DIARIRA - RECURSO HUMANO - NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="recursohumano_guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				              
                <div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Departamento</label>
					<div class="col-sm-10">
                        <select id="departamentos" name="departamentos">   
                                <option value="">-- Seleccione una opción --</option>   
                                <?php   
                                    if (mysqli_num_rows($resultado) > 0) {    
                                        while($fila = mysqli_fetch_assoc($resultado)) {           
                                            echo "<option value=" . $fila["DepartamentoId"]. ">" . $fila["Descripcion"] . "</option>";  
                                        } 
                                    } 
                                    else {
                                        echo "<option value=''>No hay departamentos disponibles</option>";
                                    }   
                                ?>
                        </select>						
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
						<a href="recursohumano_abc.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>