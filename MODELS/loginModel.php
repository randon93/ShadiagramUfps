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
          //mkdir('PUBLIC/USER/'.$email);
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

      /* contiene un Array con la informacion del usuario que intenta iniciar sesion */
      $exito = $this->bd->buscarGen([$usuario['email']],'usuario',['email']);

      /*Si este array es diferente a NULL significa que el usuario existe procedemos a verificar su password*/
      if (!empty($exito)) { 

        if ($exito[0]['contrasena'] == $usuario['password']) {
            $_SESSION['USER'] = new Usuario();
            $_SESSION['USER']->crear($exito);
            return true;
        }
      }else {
        return false;
      }
    }

}
 ?>
