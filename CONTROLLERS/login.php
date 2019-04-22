<?php
/**
 *
 */
class Login extends controller{

  function __construct()  {
    parent::__construct();
    $this->view->render('login/index');
    //echo "CONTROLADOR DE login";
  }
}
 ?>
