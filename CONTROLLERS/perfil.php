<?php
/**
 *
 */
class Perfil extends controller{

  function __construct()  {
    parent::__construct();
    $this->view->imagenes = [];

  }

  function render(){
    $img = $this->model->cargarImagenes();
    $this->view->imagenes = $img;
    $this -> view -> render('PERFIL/index');
  }

  function mostrarPublicaciones (){

  }
}
 ?>
