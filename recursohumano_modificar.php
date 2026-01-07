<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM RecursoHumano WHERE RecursoHumanoId = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

    $sqlDepartamento = "SELECT DepartamentoId, Descripcion FROM departamento where baja = 0 ORDER BY descripcion ASC";
    $resultadoDepartamento = $mysqli->query($sqlDepartamento);    
	


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
				<h3 style="text-align:center">RECURSO HUMANO - MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="recursohumano_actualizar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" required>
					</div>
				</div>
				
                <div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Departamento</label>
					<div class="col-sm-10">
                        <select id="departamentos" name="departamentos">   
                                <option value="">-- Seleccione una opción --</option>   
                                <?php   
                                    if (mysqli_num_rows($resultadoDepartamento) > 0) {    
                                        while($fila = mysqli_fetch_assoc($resultadoDepartamento)) {   
                                            if ($fila["DepartamentoId"] == $row['DepartamentoId']) {
                                                echo "<option value=" . $fila["DepartamentoId"] .  " selected>" . $fila["Descripcion"] . '</option>';
                                            }
                                            else {
                                                echo "<option value=" . $fila["DepartamentoId"]. ">" . $fila["Descripcion"] . "</option>";
                                            }
                                              
                                        } 
                                    } 
                                    else {
                                        echo "<option value=''>No hay departamentos disponibles</option>";
                                    }   
                                ?>
                        </select>						
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['RecursoHumanoId']; ?>" />
							
				<div class="form-group">
					<label for="baja" class="col-sm-2 control-label">¿Baja?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="baja" name="baja" value="1" <?php if($row['Baja']=='1') echo 'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="baja" name="baja" value="0" <?php if($row['Baja']=='0') echo 'checked'; ?>> NO
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