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

  function __construct($user) { echo " ** CREANDO USUARIO ** <br />";
    //  parent::__construct(); MODEL
    $this->name = $user[0]['nombre'];
    $this->email = $user[0]['email'];
    $this->password = $user[0]['contrasena'];
    $this->alias = $user[0]['alias'];
    $this->id = $user[0]['id'];
    $this->resena = $user[0]['resena'];

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
      return $this->Id;
    }
    function setId($Id){
      $this->Id = $Id;
    }

    function getResena(){
      return $this->resena;
    }
    function setResena($resena){
      $this->resena = $resena;
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
