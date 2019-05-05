<?php
/**
 *
 */
 require_once 'CONTROLLERS/errorController.php';
class App {

  private $sesionApp;

  public function getSesionApp(){
    return $this->sesionApp;
  }

  function __construct()  {
    $this->sesionApp = new Sesion();
    $this->validarSesion();
  }

  public function validarSesion() {
    if ( !isset($_SESSION['USER']) ) {
      $this->cargarInicio();
    }else { echo " ** SESION YA INICIADA app ** <br />";
      $url = isset($_GET['url']) ? $_GET['url']: null;
      echo $url;
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      if (count($url) < 0 ) {
        if ( strcmp($url[1], 'cerrarSesion') == 0){
          $this->cargarInicio();
          return true;
        }
      }
      $archivoController = 'CONTROLLERS/perfilController.php';
      require_once $archivoController;
      $controller = new Perfil();
      $controller->loadModel('perfil');
      //$controller->render('perfil');
      if(isset($url[1])){ echo " <br />** ENTRO A BUSCAR .popo ** <br />";
        $controller->{$url[1]}();
      }else { echo " ** CARGO LA VISTA ** <br />";
        $controller->render('perfil');
      }
    }
  }

  public function cargarInicio() {

    $url = isset($_GET['url']) ? $_GET['url']: null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    var_dump( $url);
    /* cuando se ingresa sin definir controlador
    strcmp Devuelve < 0 si str1 es menor que str2;
    > 0 si str1 es mayor que str2
    0 si son iguales.
    */
    if (empty($url[0]) || strcmp($url[0], 'login') == 0 ) {
      echo "**CARGO INICIO App** <br />";
      $archivoController = 'CONTROLLERS/loginController.php';
      require_once $archivoController;
      $controller = new Login();
      $controller->loadModel('login');
      if(isset($url[1])){ echo " <br />** ENTRO A BUSCAR EL METODO8 ** <br />";
        $controller->{$url[1]}();
      }else { echo " ** CARGO LA VISTA ** <br />";
        $controller->render('login');
      }
      return false;
    }

  /*  $archivoController = 'CONTROLLERS/'. $url[0] .'Controller.php';
    if(file_exists($archivoController)){
      require_once $archivoController;

      $controller = new $url[0];
      $controller->loadModel($url[0]);

      // # elemental del arreglo
      if(isset($url[1])){
        $controller->{$url[1]}();
      }else {
        $controller->render($url[0]);
      }
    }else{
      $controller = new falla();
    } */
  }
}
 ?>
