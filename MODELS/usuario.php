<?php
/**
 *
 */
class Usuario  {

  private $name;
  private $email;
  private $password;
  private $alias;
  private $id;
  private $resena;
  private $photo;

  function __construct($user) { echo " ** CREANDO USUARIO ** <br />";
    //  parent::__construct(); MODEL
    $this->name = $user[0]['nombre'];
    $this->email = $user[0]['email'];
    $this->password = $user[0]['contrasena'];
    $this->alias = $user[0]['alias'];
    $this->id = $user[0]['id'];
    $this->resena = $user[0]['resena'];
    $this->photo = $user[0]['photo'];

  }
/** //////////////////////////////////////////////  */
                /** METODOS GET Y SET*/
/** //////////////////////////////////////////////  */

    function getNombre(){
      return $this->name;
    }
    function setNombre($nombre){
      $this->name = $nombre;
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
      return $this->id;
    }
    function setId($Id){
      $this->id = $Id;
    }

    function getResena(){
      return $this->resena;
    }
    function setResena($resena){
      $this->resena = $resena;
    }

    function getPhoto(){
      return $this->photo;
    }
    function setPhoto($photo){
      $this->photo = $photo;
    }
/** //////////////////////////////////////////////  */
        /** FIN DE LOS METODOS GET Y SET*/
/** //////////////////////////////////////////////  */

/** ///////////////////////////////////////////////  */
    /**???????????????????????????????????*/
/** //////////////////////////////////////////////  */
    public function FunctionName($value='')  {
      // code...
    }
/** /////////////////// FIN  //////////////////////  */
    /**???????????????????????????????????*/
/** //////////////////////////////////////////////  */

}
 ?>
