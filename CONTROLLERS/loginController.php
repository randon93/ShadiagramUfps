<?php
/**
 *
 */

class Login extends controller{

  private $sesionCtr;
  private $controllerFather;

  function __construct()  { echo ' ** CREANDO CONTROLADOR DE LOGIN ** <br />';
  //  $this->sesionCtr = $sesionApp;
    parent::__construct();

  }
  /** //////////////////////////////////////////////  */
      /** METODO RENDERISAR VISTA DEL CONTROLADOR*/
  /** //////////////////////////////////////////////  */

  function render($r){ echo " ** RENDER LOGIN CONTROLLER **<br /> ";
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

  function iniciar(){ echo " ** LOGIN CONTROLLER iniciar **<br /> ";

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        if ( !isset($_SESSION['USER']) ) { echo " ** CREANDO SESION ** "; // FALSE si no existe sesion.

                $email = $_POST['email'];
                $password = $_POST['password'];
                /*Valida si el usuario puede o no crear una sesion*/
                $exito = $this->getModelCtr()->iniciar(['email'=>$email,'password'=>$password]);
                if ($exito) { echo " ** Sesion creada LOGIN CONTROLLER ** ";// TRUE el usuario creo una sesion, procede a mostrar su perfil
                    require_once 'perfilController.php';
                    $perfilUser = new Perfil();
                    $perfilUser->loadModel('perfil');
                    $perfilUser->render();
                }else { echo " ** VISTA ERROR LOGIN CONTROLLER **<br /> ";
                    echo "<script> alert('CONTRASEÑA O USUARIO ERRADO'); </script>";
                    $this->render('login');
                }
         }else { echo " ** EXISTE SESION LOGIN CONTROL **<br /> ";
           echo $_SESSION['USER']->getAlias();
             require_once 'perfilController.php';
             $perfilUser = new Perfil();
             $perfilUser->loadModel('perfil');
             $perfilUser->render();
         }
    }else {echo " ** VISTA ERROR LOGIN CONTROLLER **<br /> ";
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
