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
        echo " <br /> <h1>PRRO</h1>";
        require 'VIEWS/LOGIN/index.php';
      }else{
        define('VISTA',$vista);
        require 'VIEWS/plantilla/plantilla.php';
      }
  }
}
 ?>
