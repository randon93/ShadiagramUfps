<?php
/**
 *
 */
class perfilModel extends Model {

  function __construct() {
    parent::__construct();
  }

public function cargarImagenes(){
  $user = $_SESSION['SESION'];
  $ruta = 'PUBLIC/USER/'.$user;
  echo "<h1>".$ruta."</h1>";
  $directorio = opendir('PUBLIC/USER/'.$user); //ruta actual
  $json = array();
  while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente
      if (is_dir($archivo)){//verificamos si es o no un directorio
        //  echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
      }else {
        $otro = array('img'=>$archivo);
        array_push($json,$otro);
      }
  }
  //echo json_encode($json);
    return $json;
}

}

 ?>
