<?php
/**
 *
 */
class Controller{
  private $viewCtr;
  private $modelCtr;
  private $sesionCtr;

  public function getViewCtr() {echo "GET_VIEW_CTR<br />";
     return $this->viewCtr;
  }

  public function getModelCtr() {echo "GET_model_CTR<br />";
    return $this->modelCtr;
  }

  public function getSesionCtr(){echo "GET_sesion_CTR<br />";
    return $this->sesionCtr;
  }

  function __construct()  { echo " ** creando controlador padre ** <br />";
  //  $this->sesionCtr = $sesion;
    $this->viewCtr = new view();
  }

  public function loadModel($model)  { echo " ** creando LOAD MODEL CONTROLLER ** <br />";
    $url = "MODELS/".$model."Model.php";
    if (file_exists($url)) {
        require $url;
        $modelName = $model."Model";
        $this->modelCtr = new $modelName();
    }
  }


}
 ?>
