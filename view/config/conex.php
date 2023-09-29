<?php
$hostname_conex = "66.165.234.218";
$database_conex = "systemsg_cryz";
$username_conex = "systemsg_cryz";
$password_conex = "-U0(Y=kRG26z";
// creación de la conexión a la base de datos con mysql_connect()
$conex = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or 
die ("No se ha podido conectar al servidor de Base de datos"); 

?>
