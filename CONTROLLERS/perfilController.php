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
      $this->render();
    }else {
      $this->getViewCtr()->render('ERROR/index');
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

  public function configProfile(){
    $this->getViewCtr()->render('PERFIL/configProfile');
  }

  public function subirPhotoProfile(){
    if($this->getModelCtr()->subirPhotoProfile()){
      $this->render();
    }else {
      $this->getViewCtr()->render('ERROR/index');
    }

  }

  public function upDatePassword(){
    if($this->getModelCtr()->upDatePassword() ){
      echo "<script> alert('CONTRASEÑA ACTUALIZADA CORRECTAMENTE'); </script>";
        $this->getViewCtr()->render('perfil/configProfile');
    }else {
        echo "<script> alert('Ocurrio un error al actualizar la contraseña intentelo mas tarde'); </script>";
        $this->getViewCtr()->render('perfil/configProfile');
    }
  }

  public function upDateAlias(){
    $ant = $_SESSION['USER']->getAlias();
    if($this->getModelCtr()->upDateAlias()){
      $new = $_POST['nameNew'];
      echo "<script> alert('Tu Alias ha cambiado de @$ant a @$new'); </script>";
        $this->getViewCtr()->render('perfil/configProfile');
    }
  }

  public function upDateDescription(){
    if ($this->getModelCtr()->upDateDescription()) {
      echo "<script> alert('DESCRIPCION ACTUALIZADA CORRECTAMENTE'); </script>";
          $this ->getViewCtr()->render('perfil/configProfile');
    }else {
      echo "<script> alert('Ocurrio un error al actualizar la descripcion intentelo mas tarde'); </script>";
      $this->getViewCtr()->render('perfil/configProfile');
    }
  }

  public function follow (){

  }
}
 ?>
