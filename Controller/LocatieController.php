<?php
/**
 *
 */
class LocatieController
{

  private $model;

  function __construct()
  {
    $this->model = new LocatieModel();
  }
  public function showLocatie()
  {
    $model = $this->model;
    $locatie = $model->getAll();
    include_once "View/LocatieView.php";
  }
  public function loadAddLocatieView()
  {
    include_once "View/AddLocatieView.php";
  }
  public function addLocatie()
  {
    $locatieNaam = $_POST["locatieNaam"];
    $model = $this->model;
    $model->addLocatie($locatieNaam);
    header("Location: /LocatieController/showLocatie");
  }
  public function loadEditLocatieView($params)
  {
    $locatieId = $params[0];
    $locatieNaam = $params[1];
    include_once "View/editLocatieView.php";
  }
  public function editLocatie()
  {
    $locatieId = $_POST["locatieId"];
    $locatieNaam = $_POST["locatieNaam"];
    $model = $this->model;
    $model->editLocatie($locatieId, $locatieNaam);
    header("Location: /LocatieController/showLocatie");
  }
  public function deleteLocatie($params)
  {
    $locatieId = $params["0"];
    $model = $this->model;
    $model->deleteLocatie($locatieId);
    header("Location: /LocatieController/showLocatie");
  }
}

?>
