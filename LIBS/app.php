<?php
/**
 *
 */
 require_once 'CONTROLLERS/error.php';
class App {

  function __construct()  {

    $url = isset($_GET['url']) ? $_GET['url']: null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);


    //cuando se ingresa sin definir controlador
    if (empty($url[0])) {
      $archivoController = 'CONTROLLER/login.php';
      require_once $archivoController;
      $controller = new login();
      $controller->loadModel('login');
      $controller->render();
    }
    $archivoController = 'CONTROLLERS/'. $url[0] .'.php';
    if(file_exists($archivoController)){
      require_once $archivoController;
      // INICIAR CONTROLADOR
      $controller = new $url[0];
      $controller->loadModel($url[0]);

      // # elemental del arreglo
      if(isset($url[1])){
        $controller->{$url[1]}();
      }else {
        $controller->render();
      }
    }else{
      $controller = new falla();
    }
  }
}
 ?>
