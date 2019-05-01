<?php
/**
 *
 */
class perfilModel extends Model {

  function __construct() { echo " ** CREANDO PERFIL MODEL ** <br />";
    parent::__construct();
  }

  public function cargarImagenes(){echo " ** CARGANDO PUBLICACIONES DEL USUARIO PERFIL MODEL ** <br />";

    $directorio = opendir('PUBLIC/img/users'); //ruta actual
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

  public function subirPublicacion(){
    
  }
}
/*

$datetime1 = date_create('2009-10-11');
$datetime2 = date_create('2009-10-13');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a días'); resultado 2 dias

**************************************************
**************************************************

Si las fechas tienen el mismo formato las puedes comparar directamente:
$fecha1="27-10-2008";
$fecha2="28-10-2008";
if($fecha1 > $fecha2)
echo "$fecha1 > $fecha2";

Si las fechas tienen distinto formato lo puedes hacer con la función strtotime:
$fecha1=strtotime("27-10-2008");
$fecha2=strtotime("2008-10-28");
if($fecha1 > $fecha2)
echo "Fecha1 > Fecha2";

*/
 ?>
