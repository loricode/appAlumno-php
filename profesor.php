<?php
require_once("conexion.php");
require_once("principal.php");
$json = array();
$obj = new  Principal();
$json = $obj->getProfesores();
$jsonstring = json_encode($json);
echo $jsonstring;


?>