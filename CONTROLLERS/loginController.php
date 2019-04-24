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
      echo constant('SESION');
      defined('SESION',$alias);
      echo constant('SESION');
      header("location:".constant('URL')."perfil");
      //$this->render('perfil');
    }else {
      $this->render('error');
    }
  }

  /** //////////////////////////////////////////////  */
            /** METODO AGREGAR USUARIO*/
  /** //////////////////////////////////////////////  */

  function iniciar(){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $exito = $this->model->iniciar(['email'=>$email,'password'=>$password]);

    if ($exito) {
      session_start();
      $_SESSION['SESION'] = $;
      header("location:".constant('URL')."perfil");
    }else {

      $this->render('error');
    }
  }
}
 ?>
