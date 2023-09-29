<?php
	
	$mysqli = new mysqli('66.165.234.218', 'systemsg_cryz', '-U0(Y=kRG26z', 'systemsg_cryz');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>