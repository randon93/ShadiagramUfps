<?php
/**
 *
 */
class Conexion {

  function __construct(){
    $this->bd = constant('bd');
    $this->usuarioBd = constant('usuarioBd');
    $this->pasword = constant('password');
    $this->pdo = null;
  }

  public function conectar()  {

    if ($this->pdo == null) {
      try {

          $optiones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  => false
          ];

          $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=' . $this->bd , $this->usuarioBd , $this->pasword, $optiones);
          return $this->pdo;

      } catch (PDOException $e) {

          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();

      }
    } else {

      return $this->pdo;

    }

  }

  public function cerrarCon(){
    $this->pdo = null;
  }

  private function aggAnd($parametro, $columna){
    $cad ="";
    for ($i=1; $i < count($parametro); $i++) {
        $cad .=  " AND " . $columna[$i] . " = " . $parametro[$i];
    }
    return $cad;
  }

  public function buscar($parametro, $tabla, $columna){

    if(count($columna) == count($parametro)){

        $array = [];
        if (!empty($tabla) ) { // si $tabla trae un parametro se busca! si esta vacio retorna NULL.
          if (count($parametro) == 0) {// si el parametro esta vacio se muestra toda la info de la tabla
            $sql = "SELECT * FROM " . $tabla;
          }else {
            if (count($columna) > 1 ) {
              $sql = "SELECT * FROM " . $tabla . " WHERE " . $columna[0] ." = " . $parametro[0] . $this->aggAnd($parametro, $columna);
            }
            $sql = "SELECT * FROM " . $tabla . " WHERE " . $columna[0] ." = " . $parametro[0] ;

            $con = $this->conectar()->prepare($sql);
            $respuesta = $con -> execute();
            if ($respuesta->fetchColumn() > 0) {
              foreach ($respuesta as $res) {
                  array_puesh($array, ['nombre'=>$res["nombre"], 'email'=>$res["email"],]);
              }
            }
          }
        }else {
          $sql = "nada";
        //  return $sql;
        }
    } else {
        $sql = "nada final";
      }
      echo $sql;
    //  return $sql;
  }

  /** //////////////////////////////////////////////  */
            /**  metodo en el cual nos retona
        *un TRUE si el usuario ya existe en la BD*/
  /** //////////////////////////////////////////////  */
  public function verificarEx($email){
      $con = $this->conectar();
      $exito = $con->prepare("SELECT COUNT(*) FROM usuario WHERE email = ?");
      $exito->execute(array($email));
      if ($exito->fetchColumn() > 0) {
        return true;
      }
      return false;
  }

}//clase

 ?>
