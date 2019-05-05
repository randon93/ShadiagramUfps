<?php
/**
 *
 */

class Perfil extends controller{

    function __construct()  { echo " ** CREANDO PERFIL CONTROLLER ** <br />";
    parent::__construct();
    //$this->view->imagenes = [];
  }

  function render(){ echo " ** RENDER PERFIL CONTROLLER ** <br />";
    $img = $this->getModelCtr()->cargarImagenes($_SESSION['USER']->getId());
    $this->getViewCtr()->imagenes = $img;
    $this->getViewCtr()->render('PERFIL/profile');
  }

  public function subirPublicacion(){
    if( $this->getModelCtr()->subirPublicacion() ) {
      $img = $this->getModelCtr()->cargarImagenes($_SESSION['USER']->getId());
      $this->getViewCtr()->imagenes = $img;
      $this->getViewCtr()->render('PERFIL/profile');
    }else {
      $this->getViewCtr()->render('ERROR/profile');
    }
  }

  public function buscarUsuarios(){
      $this->getViewCtr()->founds = $this->getModelCtr()->searchUser();
      $img = $this->getModelCtr()->cargarImagenes($_SESSION['USER']->getId());
      $this->getViewCtr()->imagenes = $img;
      $this->getViewCtr()->render('PERFIL/busqueda');
  }

  public function verPerfil(){
      $img = $this->getModelCtr()->cargarImagenes($_GET['id']);
      $this->getModelCtr()->visitUser([ "id"=>$_GET['id'], "nombre"=>$_GET['nombre'], "alias"=>$_GET['alias'], "photo"=>$_GET['photo'], "resena"=>$_GET['resena'] ]);
      $this->getViewCtr()->imagenes = $img;
      $this->getViewCtr()->render('PERFIL/profileOther');
  }
}
 ?>
