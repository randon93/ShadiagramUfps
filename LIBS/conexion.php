<?php
/**
 *
 */
class Conexion {

  function __construct(){ echo " ** CREANDO CONEXION  **<br /> ";
    $this->bd = constant('bd');
    $this->usuarioBd = constant('usuarioBd');
    $this->pasword = constant('password');
    $this->pdo = null;
  }
  /** //////////////////////////////////////////////  */
            /** METODO CREA CONEXION BD*/
  /** //////////////////////////////////////////////  */
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

  /** //////////////////////////////////////////////  */
            /** METODO CIERRA CONEXION BD*/
  /** //////////////////////////////////////////////  */
  public function cerrarCon(){
    $this->pdo = null;
  }

  /** //////////////////////////////////////////////  */
            /** METODO AGREGAR USUARIO*/
  /** //////////////////////////////////////////////  */
  private function aggAnd($parametro, $columna){
    $cad ="";
    for ($i=1; $i < count($parametro); $i++) {
        $cad .=  " AND " . $columna[$i] . " = ? ";
    }
    return $cad;
  }

  /** //////////////////////////////////////////////  */
            /** METODO BUSCAR GENERICO*/
  /** //////////////////////////////////////////////  */
  public function buscarGen($parametro, $tabla, $columna){ // parametro[]: valos a buscar en la BD, tabla: tabla de la BD donde se buscara la fila, columna[]: variable de la tabla la cual se busca el parametro

    if(count($columna) == count($parametro)){
        $sql =""; // variable en la cual guardamos la consulta a preparar
        $param = array(); // array que guarda los parametros del EXECUTE
        $array = array(); // array que guarda el objeto encontrado
        if (!empty($tabla) ) { // si $tabla trae un parametro se busca! si esta vacio retorna un Arreay vacio.
          if (count($parametro) == 0) { // si el parametro esta vacio se muestra toda la info de la tabla
            $sql = "SELECT * FROM " . $tabla;
          }else {

            if (count($columna) > 1 ) { // entra si se ha de buscar con mas de una parametro
              $sql = "SELECT * FROM " . $tabla . " WHERE " . $columna[0] ." = ? " . $this->aggAnd($parametro, $columna);
              for ($i=0; $i <count($parametro) ; $i++) {
                array_push($param, $parametro[$i]);
              }
            }else {// si no, es por que se busca haciendo referencia solo a un parametro
              $sql = "SELECT * FROM " . $tabla . " WHERE " . $columna[0] ." = ?";

              array_push($param, $parametro[0]);

            }

            $con = $this->conectar();
            $respuesta = $con -> prepare($sql);
            $respuesta -> execute($param);
            if ($respuesta->fetchColumn() > 0) { // valido si la consulta encontro alguna coincidencia
              $respuesta -> execute($param);
              $this->cerrarCon();
              foreach($respuesta as $res) {
                  array_push($array, ['nombre'=>$res["nombre"], 'email'=>$res["email"],'contrasena'=>$res["contrasena"], 'alias'=>$res["apodo"], 'id'=>["id"], 'resena'=>$res["resena"]]);
              }

            }
            return $array;
          }
        }else {

          return [];
        }
    } else {

        return [];
      }
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
