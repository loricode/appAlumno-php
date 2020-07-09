<?php
require_once("conexion.php");
require_once("principal.php");
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$obj = new Principal();
$json = $obj->login($correo,$clave);

if(strcmp($json, $correo) === 0){
  echo "login";
}




?>