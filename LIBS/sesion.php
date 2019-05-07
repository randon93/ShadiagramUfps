<?php
/**
 *
 */
class Sesion {

  private $user ;

  function __construct()  {
      session_start();
  }

  public function setCurrentUser($usuariOn){
    $_SESSION['USER'] = $usuariOn;
    $this->user = $_SESSION['USER'];
  }

  public function getCurrentUser(){
    return $_SESSION['USER'];
  }

  public function cerrarSesion(){
    session_unset();
    session_destroy();
  }
}
 ?>
