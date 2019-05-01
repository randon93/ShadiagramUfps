<?php
/**
 *
 */
class View {

  function __construct()  { echo " ** CREANDO VIEW GENERAL ** <br />";
    //echo "view base";
  }

  function render($vista){ echo " ** MOSTRANDO RENDER VIEW GENERAL ** <br />";
    
    define('VISTA',$vista);
    require 'VIEWS/plantilla/plantilla.php';

  }
}
 ?>
