<?php
/**
 *
 */

class Login extends controller{

  private $sesionCtr;
  private $controllerFather;

  function __construct()  {
  //  $this->sesionCtr = $sesionApp;
    parent::__construct();

  }
  /** //////////////////////////////////////////////  */
      /** METODO RENDERISAR VISTA DEL CONTROLADOR*/
  /** //////////////////////////////////////////////  */

  function render($r){
    $this->getViewCtr()->render($r . '/index');
  }

  /** //////////////////////////////////////////////  */
            /** METODO AGREGAR USUARIO*/
  /** //////////////////////////////////////////////  */

  function registrar(){

    $alias = $_POST['alias'];
    $nombre   = $_POST['nombre'];
    $email  = $_POST['email'];
    $password = $_POST['password'];

    $exito = $this->getModelCtr()->agg(["nombre" => $nombre, "alias" => $alias, "email" => $email, "password" => $password ]);

    if ($exito) {
      $this->iniciar();
    }else {
      $this->render('error');
    }
  }

  /** //////////////////////////////////////////////  */
            /** METODO INICIAR SESION */
  /** //////////////////////////////////////////////  */

  function iniciar(){

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        if ( !isset($_SESSION['USER']) ) {  // FALSE si no existe sesion.

                $email = $_POST['email'];
                $password = $_POST['password'];
                /*Valida si el usuario puede o no crear una sesion*/
                $exito = $this->getModelCtr()->iniciar(['email'=>$email,'password'=>$password]);
                if ($exito) { // TRUE el usuario creo una sesion, procede a mostrar su perfil
                    require_once 'perfilController.php';
                    $perfilUser = new Perfil();
                    $perfilUser->loadModel('perfil');
                    $perfilUser->render();
                }else {
                    echo "<script> alert('CONTRASEÑA O USUARIO ERRADO'); </script>";
                    $this->render('login');
                }
         }else {
           echo $_SESSION['USER']->getAlias();
             require_once 'perfilController.php';
             $perfilUser = new Perfil();
             $perfilUser->loadModel('perfil');
             $perfilUser->render();
         }
    }else {
        $this->render('error');
    }
  }

  /** //////////////////////////////////////////////  */
            /** METODO CERRAR SESION*/
  /** //////////////////////////////////////////////  */

  function cerrarSesion(){
    session_unset();
    session_destroy();
    $this->render('error');
  }

}
 ?>
