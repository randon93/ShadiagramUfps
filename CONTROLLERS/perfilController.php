<?php
/**
 *
 */
class Perfil extends controller{

    function __construct()  {
    parent::__construct();
    //$this->view->imagenes = [];
  }

  function render($user){

    $img = $this->model->cargarImagenes($user);
    $this->view->imagenes = $img;
    $this->view->render('PERFIL/index');
  }


}
 ?>
