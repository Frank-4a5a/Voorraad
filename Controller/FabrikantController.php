<?php
/**
 *
 */
class FabrikantController
{

  private $model;

  function __construct()
  {
    $this->model = new FabrikantModel();
  }
  public function showFabrikant()
  {
    $model = $this->model;
    $fabrikant = $model->getAll();
    include_once "View/FabrikantView.php";
  }
  public function loadAddFabrikantView()
  {
    include_once "View/AddFabrikantView.php";
  }
  public function addFabrikant()
  {
    $fabrikantNaam = $_POST["fabrikantNaam"];
    $model = $this->model;
    $model->addFabrikant($fabrikantNaam);
    header("Location: /FabrikantController/showFabrikant");
  }
  public function loadEditFabrikantView($params)
  {
    $fabrikantId = $params[0];
    $fabrikantNaam = $params[1];
    include_once "View/editFabrikantView.php";
  }
  public function editFabrikant()
  {
    $fabrikantId = $_POST["fabrikantId"];
    $fabrikantNaam = $_POST["fabrikantNaam"];
    $model = $this->model;
    $model->editFabrikant($fabrikantId, $fabrikantNaam);
    header("Location: /FabrikantController/showFabrikant");
  }
  public function deleteFabrikant($params)
  {
    $fabrikantId = $params["0"];
    $model = $this->model;
    $model->deleteFabrikant($fabrikantId);
    header("Location: /FabrikantController/showFabrikant");
  }
}

?>
