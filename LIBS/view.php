<?php
/**
 *
 */
class View {

  function __construct()  {
    //echo "view base";
  }

  function render($vista){
    define('VISTA',$vista);
    require 'views/plantilla/plantilla.php';

  }
}
 ?>
