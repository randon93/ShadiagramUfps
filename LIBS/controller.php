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

  public function getModelCtr() {
    return $this->modelCtr;
  }

  function __construct()  {
    $this->viewCtr = new view();
  //  $this->$sesionCtr = new Sesion();
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
