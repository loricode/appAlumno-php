<?php
require_once("conexion.php");
require_once("principal.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$obj = new Principal();
$mensaje = $obj->crearAlumno($nombre, $telefono, $correo, $clave);
echo $mensaje;

?>