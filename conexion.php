<?php
	
	$mysqli = new mysqli('localhost', 'root', '1234', 'actividaddiaria');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>