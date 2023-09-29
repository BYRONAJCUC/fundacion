<?php
	$contrasena = '-U0(Y=kRG26z';
	$usuario = 'systemsg_cryz';
	$nombrebd= 'systemsg_cryz';

	try {
		$bd = new PDO(
			'mysql:host=66.165.234.218;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>
