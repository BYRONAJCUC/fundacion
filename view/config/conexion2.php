<?php
function conectar(){
$conexion=null;
$host='66.165.234.218';
$db='systemsg_cryz';
$user = "systemsg_cryz";
$pass= "-U0(Y=kRG26z";
try {
  $conexion= new PDO('mysql:host='.$host.';dbname='.$db, $user,$pass);


} catch (PDOException $e) {
  echo '<p> No se puede conectar a la base de datos </p>';
  exit;
}
return $conexion;


}

 ?>
