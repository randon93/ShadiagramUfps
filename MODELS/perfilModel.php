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

    $descripcion = isset($_GET['descripcion']) ? $_GET['descripcion'] : " ";
    //comprobamos si ha ocurrido un error.
    if ($_FILES["imagen"]["error"] > 0){
        echo "ha ocurrido un error";
    } else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
    //con estas variables generaremos un codigo que vamos a unir como nombre a la imagen
                //de esta manera evitaremos problemas con los nombres de las imagenes
        $fechaactual  = date("dHi");  //Fecha Actual
        $no_aleatorio  = rand(10, 99); //Generamos dos Digitos aleatorios
                //esta es la ruta donde copiaremos la imagen
                //recuerden que deben crear un directorio con este mismo nombre
                //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta = constant('URL') . $fechaactual . $no_aleatorio.$_FILES['imagen']['name'];
        //comprobamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
    if (!file_exists($ruta)){
        //aqui movemos el archivo desde la ruta temporal a nuestra ruta
        //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
        //almacenara true o false
        $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $imagen = $fechaactual.$no_aleatorio.$_FILES['imagen']['name'];
            $con = $this->db->conectar();
            $con -> prepare("INSERT INTO publicacion (idUsuario, imagen, descripcion,fechaSub) VALUES (?,?,?,?)");
            $con -> execute(array($_SESSION['USER']->getId(), $imagen, $descripcion, $fechaactual));
            echo "el archivo ha sido movido exitosamente";
          } else {
            echo "ocurrio un error al mover el archivo.";
        }
      } else {
        echo $_FILES['imagen']['name'] . ", este archivo existe";
    }
      } else {
          echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
        }
    }

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
