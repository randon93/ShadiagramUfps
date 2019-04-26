<?php
/**
 *
 */

class Login extends controller{

  function __construct()  {
    parent::__construct();
  }
  /** //////////////////////////////////////////////  */
      /** METODO RENDERISAR VISTA DEL CONTROLADOR*/
  /** //////////////////////////////////////////////  */

  function render($r){
    $this->view->render($r . '/index');
  }

  /** //////////////////////////////////////////////  */
            /** METODO AGREGAR USUARIO*/
  /** //////////////////////////////////////////////  */

  function registrar(){

    $alias = $_POST['alias'];
    $nombre   = $_POST['nombre'];
    $email  = $_POST['email'];
    $password = $_POST['password'];

    $exito = $this->model->agg(["nombre" => $nombre, "alias" => $alias, "email" => $email, "password" => $password ]);

    if ($exito) {

      header("location:".constant('URL')."perfil");
      //$this->render('perfil');
    }else {
      $this->render('error');
    }
  }

  /** //////////////////////////////////////////////  */
            /** METODO INICIAR SESION */
  /** //////////////////////////////////////////////  */

  function iniciar(){

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        if ($this->model->getSesiOn() == null) {
            $email = $_POST['email'];/* -------------------- */
            $password = $_POST['password'];
            $exito = $this->model->iniciar(['email'=>$email,'password'=>$password]);
            if ($exito) {
                require_once 'perfilController.php';
                $perfilUser = new Perfil();
                $perfilUser->loadModel('perfil');
                $perfilUser->render($this->model->getAlias());
                //require_once (constant('URL').'VIEWS/PERFIL/index.php');
                //header("location:".constant('URL')."perfil");
            }else {
                $this->render('error');
            } /* -------------------- */
        }else {
            require_once 'perfilController.php';
            $perfilUser = new Perfil();
            $perfilUser->render($this->model->getAlias());
        }
    }else {
        $this->render('error');
    }


  }

  /** //////////////////////////////////////////////  */
            /** METODO CERRAR SESION*/
  /** //////////////////////////////////////////////  */

  function cerrarSesion(){
    $this->model->getSesiOn->cerrarSesion();
  }

}
 ?>
