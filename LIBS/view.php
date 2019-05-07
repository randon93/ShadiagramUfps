<?php
/**
 *
 */
class View {

  function __construct()  {
    //echo "view base";
  }

  function render($vista){
  
      if ( strcmp($vista, 'login/index') == 0) {
        require 'VIEWS/LOGIN/index.php';
      }else{
        require "VIEWS/$vista.php";
      }
  }
}
 ?>
