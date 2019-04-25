<?php
/**
 *
 */
class sesion {

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
    echo "<h1>CERRE---</h1>";
  }
}
 ?>
