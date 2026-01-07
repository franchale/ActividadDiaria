<?php
require 'conexion.php';

$sql = "SELECT DepartamentoId, Descripcion FROM departamento where baja = 0 ORDER BY descripcion ASC";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
    <html>
        <head> 
            <title>Llenar ComboBox</title>
        </head>
        <body>
            <label for="departamentos">Selecciona un departamento:</label>
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
        </body>
    </html>
