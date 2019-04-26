<?php
/**
 *
 */
class Usuario  extends Model{


  function __construct($usuario) {
      parent::__construct();
      /*$this->nombre = $usuario['nombre'];
      $this->email = $usuario['email'];
      $this->alias =$usuario['alias'];
      $this->password = $usuario['password'];
      $this->id = $usuario['id']; */
  }
  /** //////////////////////////////////////////////  */
      /**verificamos si el usuario inicia sesion*/
  /** //////////////////////////////////////////////  */
    function existo($userName, $password){
      $con = $this->bd->conectar(); //ESTABLECEMOS UNA CONEXION C LA BD
      $exito = $con->prepare('SELECT * FROM usuario WHERE email = :email AND constrasena = :password');
      $exito->execute(['email'=>$userName, 'password'=>$password]);
      if ($exito->rowCount()) {
        $con = $this->bd->cerrarCon();// al terminar el metodo cerramos CONEXION a la bd
        return TRUE;
      }else {
        $con = $this->bd->cerrarCon();// al terminar el metodo cerramos CONEXION a la bd
        return FALSE;
      }
    }
  /** /////////////////// FIN  //////////////////////  */
      /**verificamos si el usuario inicia sesion*/
  /** //////////////////////////////////////////////  */

  /** ///////////////////////////////////////////////  */
      /**???????????????????????????????????*/
  /** //////////////////////////////////////////////  */

    public function crearSesion($user) {
        if ($this->existo()) {
          // code...
        }
    }
  /** /////////////////// FIN  //////////////////////  */
      /**???????????????????????????????????*/
  /** //////////////////////////////////////////////  */

/** //////////////////////////////////////////////  */
                /** METODOS GET Y SET*/
/** //////////////////////////////////////////////  */

    function getNombre(){
      return $this->nombre;
    }
    function setNombre($nombre){
      $this->nombre = $nombre;
    }

    function getEmail(){
      return $this->email;
    }
    function setEmail($email){
      $this->email = $email;
    }
    function getAlias(){
      return $this->alias;
    }
    function setAlias($alias){
      $this->alias = $alias;
    }
    function getPassword(){
      return $this->password;
    }
    function setPassword($password){
      $this->password = $password;
    }

    function getId(){
      return $this->Id;
    }
    function setId($Id){
      $this->Id = $Id;
    }
/** //////////////////////////////////////////////  */
        /** FIN DE LOS METODOS GET Y SET*/
/** //////////////////////////////////////////////  */

}
 ?>
