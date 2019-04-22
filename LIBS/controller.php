<?php
/**
 *
 */
class Controller{

  function __construct()  {
    $this->view = new view();
  }

  public function loadModel($model)  {
    $url = "MODELS/".$model."Model.php";

    if (file_exists($url)) {
        require $url;
        $modelName = $model."Model";
        $this->model = new $modelName();
    }
  }
}
 ?>
