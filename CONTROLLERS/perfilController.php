<?php
/**
 *
 */
class Perfil extends controller{
    function __construct()  {
    parent::__construct();
    //$this->view->imagenes = [];
  }

  function render($r){
    $img = $this->model->cargarImagenes();
    $this->view->imagenes = $img;
    $this->view->render($r.'/index');
  }

  function mostrarPublicaciones (){

  }
}
 ?>
