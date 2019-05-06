<?php
/**
 *
 */
class View {

  function __construct()  { echo " ** CREANDO VIEW GENERAL ** <br />";
    //echo "view base";
  }

  function render($vista){ echo " ** MOSTRANDO RENDER VIEW GENERAL ** <br />";
    echo "<h1>".$vista."</h1>";
      if ( strcmp($vista, 'login/index') == 0) {      
        require 'VIEWS/LOGIN/index.php';
      }else{
        require "VIEWS/$vista.php";
      }
  }
}
 ?>
