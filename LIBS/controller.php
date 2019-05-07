<?php
/**
 *
 */
class Controller{
  private $viewCtr;
  private $modelCtr;
  private $sesionCtr;

  public function getViewCtr() {
     return $this->viewCtr;
  }

  public function getModelCtr(){
    return $this->modelCtr;
  }

  public function getSesionCtr(){
    return $this->sesionCtr;
  }

  function __construct()  {
  //  $this->sesionCtr = $sesion;
    $this->viewCtr = new view();
  }

  public function loadModel($model)  {
    $url = "MODELS/".$model."Model.php";
    if (file_exists($url)) {
        require $url;
        $modelName = $model."Model";
        $this->modelCtr = new $modelName();
    }
  }


}
 ?>
