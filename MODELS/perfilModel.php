<?php
/**
 *
 */
class perfilModel extends Model {

  function __construct() { echo " ** CREANDO PERFIL MODEL ** <br />";
    parent::__construct();
  }

  public function buscarImagenes($id){
    $photoUser = array();
    $con = $this->bd->conectar()->prepare('SELECT imagen, fechaSub FROM publicacion WHERE idUsuario = ? ORDER BY fechaSub DESC');
    $con-> execute(array($_SESSION['USER']->getId()));
    foreach($con as $res) {
      array_push($photoUser, $res['imagen']);
    }
    return $photoUser;
  }

  public function cargarImagenes(){echo " ** CARGANDO PUBLICACIONES DEL USUARIO PERFIL MODEL ** <br />";

    $directorio = opendir('PUBLIC/img/users'); //ruta actual
    $json = array();
    $photoNameUser = $this->buscarImagenes($_SESSION['USER']->getId());
    $i = 0;
    while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente
        if (is_dir($archivo)){//verificamos si es o no un directorio
          //  echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
        }else {
          for ($i=0; $i < count($photoNameUser) ; $i++) {
            if (( strcmp($archivo, $photoNameUser[$i]) == 0 )) {
              $otro = array('img'=>$archivo);
              array_push($json,$otro);

            }
          }

        }
    }
    //echo json_encode($json);
      return $json;
  }

  public function subirPublicacion(){
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "23";
    if ($_FILES['imagen']['error'] > 0 ) {
        echo "ha ocurrido un error";
     } else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limiteKb = 16384;
          if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limiteKb*1024) {
              $fechaActual = date('Y-m-d');
              $noAleatorio = rand(100,9999);
              $id =  $_SESSION['USER']->getId();
              $newName = $fechaActual  . "-$noAleatorio-$id-". $_FILES['imagen']['name'] ;
              $ruta  = $_SERVER['DOCUMENT_ROOT'] . '/SHADIAGRAMUFPS/PUBLIC/IMG/USERS/'.$newName;
              if (!file_exists($ruta)) {
                  if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta)){
                    $con = $this->bd->conectar();
                    $consulta = $con -> prepare('INSERT INTO publicacion ( idUsuario, imagen, descripcion, fechaSub) VALUES (?,?,?,?)');
                    $iduser = $_SESSION['USER']->getId();
                    $consulta -> execute(array($iduser, $newName, $descripcion, $fechaActual));
                    return true;
                  }
              }
          }
      }
      return false;
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
