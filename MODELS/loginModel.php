<?php
/**
 *
 */

class loginModel extends Model {

  function __construct()  {
    parent::__construct();
  }

    /** ---------------------------------------- */
    /** ---------FUNCION AGRAGAR USUARIO-------- */
    /** ---------------------------------------- */
    public function agg($usuario){
      $email = $usuario['email'];
      if (!$this->bd->verificarEx($email)) {
      $nombre = $usuario['nombre'];
      $alias = $usuario['alias'];
      $password = $usuario['password'];
        try {
          $query = "INSERT INTO usuario (email, nombre, contrasena, apodo) VALUES (?,?,?,?)";
          $consulta = $this->bd->conectar()->prepare($query);
          $consulta -> execute(array($email,$nombre,$password,$alias));
          $this->bd->cerrarCon();
          return true; // SE REGISTRO EL USUARIO EXITOSAMENTE

        } catch (PDOException $e) {
          return false; // OCURRIO UN ERROR EN LA BD
        }
      }
      return false; // YA EXISTE UN USUARIO REGISTRADO CON ESE EMAIL
    }


    /** ---------------------------------------- */
    /** ----------FUNCION INICIAR SESION-------- */
    /** ---------------------------------------- */

    public function iniciar($usuario){

      $exito = $this->bd->buscarGen([$usuario['email']],'usuario',['email']);

      if (!empty($exito)) {
        if ($exito[0]["contrasena"] == $usuario['password']) {
          session_start();
          $_SESSION['SESION'] = $exito[0]["alias"];
          return true;
        }
      }else {
        return false;
      }
    }

}
 ?>
