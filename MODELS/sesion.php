<?php
/**
 *
 */
class Sesion {

  function __construct()  {
      session_start();
  }

  public function setCurrentUser($usuariOn){
    $_SESSION['SESION'] = $usuariOn;
  }

  public function getCurrentUser(){
    return $_SESSION['SESION'];
  }

  public function cerrarSesion(){
    $session_unset();
    $session_destroy();  
  }
}
 ?>
