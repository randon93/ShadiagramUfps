<?php
/**
 *
 */
class Inicio extends controller{

  function __construct() {
    parent::__construct();
    $this->view->render();
    echo "<h1>INICIAR SESION O REGISTRARSE</h1>";
  }
}
 ?>
