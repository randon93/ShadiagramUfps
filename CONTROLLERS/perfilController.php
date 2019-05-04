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
    $img = $this->getModelCtr()->cargarImagenes();
    $this->getViewCtr()->imagenes = $img;
    $this->getViewCtr()->render('PERFIL/index');
  }

  public function subirPublicacion(){
    if( $this->getModelCtr()->subirPublicacion() ) {
      $img = $this->getModelCtr()->cargarImagenes();
      $this->getViewCtr()->imagenes = $img;
      $this->getViewCtr()->render('PERFIL/index');
    }else {
      $this->getViewCtr()->render('ERROR/index');
    }
  }

  public function buscarUsuarios(){
    
    $this->getModelCtr()->searchUser();
  }


}
 ?>
