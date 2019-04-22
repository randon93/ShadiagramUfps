<?php
require_once 'conexion.php';
  $f = new conexion();
   $f -> conectar();
   echo "--/-/-//-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-";
  echo "segunda conexion" ;
  echo "--/-/-//-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-";
   $f -> conectar();
   echo "--/-/-//-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-";
   echo "tercera conexion" ;
   echo "--/-/-//-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-";
    $f -> conectar();
 ?>
