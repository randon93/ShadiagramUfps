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
    $_SESSION['sesionUser'] = $usuariOn;
    $this->user = $_SESSION['sesionUser'];
  }

  public function getCurrentUser(){
    return $this->user;
  }

  public function cerrarSesion(){
    session_unset();
    session_destroy();
  }
}
 ?>
