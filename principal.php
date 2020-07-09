<?php

class Principal{

    public function login($correo, $clave){
    $modelo = new conexion();
    $conexion = $modelo->getConexion();
    $sql = "SELECT * FROM alumno WHERE correo=:correo  AND clave=:clave ";
     
     $consulta = $conexion->prepare($sql);
     $consulta->bindParam(':correo', $correo);
     $consulta->bindParam(':clave', $clave);
     $consulta->execute();
 
 
     if($resultado = $consulta->fetch()){
        $res = $correo;
        return $res;
     }
     return "equivocado";
 
}

public function getProfesores(){
   $fila = array(); 
   $modelo = new conexion();
   $conexion = $modelo->getConexion();
   $sql = "SELECT * FROM profesor";
   $consulta= $conexion->prepare($sql);
   $consulta->execute();
   while($resultado = $consulta->fetch()){
     $fila[] = array(
         'id' => $resultado['id'],
         'nombre' => $resultado['nombre'],
         'direccion' => $resultado['direccion'],
         'especialidad' => $resultado['especialidad'],
         'telefono'=>$resultado['telefono'],
         'correo'=>$resultado['correo']
        );
   }
   return $fila;
}

public function crearAlumno($nombre, $telefono, $correo, $clave){
   $modelo = new conexion();
   $conexion = $modelo->getConexion();
   $sql = "INSERT INTO alumno(nombre, telefono, correo, clave) 
         VALUES(:nombre, :telefono, :correo, :clave)";

      $query = $conexion->prepare($sql);
      $query->bindParam(':nombre', $nombre);
      $query->bindParam(':telefono', $telefono);
      $query->bindParam(':correo', $correo);
      $query->bindParam(':clave', $clave);
      $query->execute();

      return "guardado";

}

}
?>