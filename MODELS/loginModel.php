<?php
/**
 *
 */
  require_once  'sesion.php';
class loginModel extends Model {

  private $nombre = null;
  private $email = null;
  private $alias = null;
  private $sesiOn = null;

  public function getNombre() {
    return $this->nombre;
  }
  public function getEmail() {
    return $this->email;
  }
  public function getAlias() {
    return $this->alias;
  }
  public function getSesiOn() {
     return $this->sesiOn;
  }

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
          mkdir('PUBLIC/USER/'.$email);
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
        if ($exito[0]['contrasena'] == $usuario['password']) {
          $this->sesiOn = new Sesion();
          $this->sesiOn->setCurrentUser($exito[0]['alias']);
          $this->nombre = $exito[0]['nombre'];
          $this->email = $exito[0]['email'];
          $this->alias = $exito[0]['alias'];
          return true;
        }
      }else {
        return false;
      }
    }

}
 ?>
