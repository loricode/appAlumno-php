<?php

 class Conexion{
   
  
     public function getConexion(){
     $Usuario="root";
     $Password="";
     $localhost="localhost";
     $db="appdb";
     
     $conexion=new PDO("mysql:host=$localhost;dbname=$db;",$Usuario, $Password);
     return $conexion;
   }
}



?>