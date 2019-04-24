<?php
/**
 *
 */
 require_once 'CONTROLLERS/errorController.php';
class App {

  function __construct()  {
    session_start();
    $url = isset($_GET['url']) ? $_GET['url']: null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);


    //cuando se ingresa sin definir controlador
    if (empty($url[0])) {
      $archivoController = 'CONTROLLERS/loginController.php';
      require_once $archivoController;
      $controller = new login();
      $controller->loadModel('loginModel');
      $controller->render('login');
      return false;
    }

    $archivoController = 'CONTROLLERS/'. $url[0] .'Controller.php';
    if(file_exists($archivoController)){
      require_once $archivoController;
      // INICIAR CONTROLADOR
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
    }
  }
}
 ?>
