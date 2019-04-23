<?php
/**
 *
 */
class Usuario  {


  function __construct() {
      $this->nombre = "";
      $this->email = "";
      $this->alias = "";
      $this->password = "";
      $this->id = "";
  }
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
