<?php
/**
 *
 */
class VoorraadController
{

  private $model;
  function __construct()
  {
    $this->model = new VoorraadModel();
  }
  public function showVoorraad()
  {
    $model = $this->model;
    $voorraadJoined = $model->getAllJoined();
    include_once "View/VoorraadView.php";
  }
  public function addVoorraad()
  {
    $productId = $_POST["productId"];
    $locatieId = $_POST["locatieId"];
    $aantal = $_POST["aantal"];
    $minimumAantal = $_POST["minimumAantal"];
    $model = $this->model;
    $model->addVoorraad($productId, $locatieId, $aantal, $minimumAantal);
    header("Location: /VoorraadController/showVoorraad");
  }
  public function loadAddVoorraadView()
  {
    $controller = new VoorraadController();
    $model = new ProductModel();
    $product = $model->getAll();
    $model = new LocatieModel();
    $locatie = $model->getAll();
    $model = new VoorraadModel();
    $voorraad = $model->getAll();
    include_once "View/AddVoorraadView.php";
  }
  public function loadEditVoorraadView($params)
  {
    $model = new ProductModel();
    $product = $model->getAll();
    $model = new LocatieModel();
    $locatie = $model->getAll();
    $productId = $params[0];
    $productNaam = $params[1];
    $locatieId = $params[2];
    $locatieNaam = $params[3];
    $aantal = $params[4];
    $minimumAantal = $params[5];
    include_once "View/EditVoorraadView.php";
  }
  public function editVoorraad()
  {
    $productId = $_POST["productId"];
    $locatieId = $_POST["locatieId"];
    $productIdOld = $_POST["productIdOld"];
    $locatieIdOld = $_POST["locatieIdOld"];
    var_dump($locatieId);
    $aantal = $_POST["aantal"];
    $minimumAantal = $_POST["minimumAantal"];
    $model = $this->model;
    $model->editVoorraad($productId, $productIdOld, $locatieId, $locatieIdOld, $aantal, $minimumAantal);
    header("Location: /VoorraadController/showVoorraad");
  }
  public function deleteVoorraad($params)
  {
    $productId = $params[0];
    $locatieId = $params[1];
    $model = $this->model;
    $model->deleteVoorraad($productId, $locatieId);
    header("Location: /VoorraadController/showVoorraad");
  }
  public function searchVoorraad()
  {
    $productNaam = $_POST["productNaam"];
    $model = $this->model;
    $voorraadJoined = $model->searchVoorraad($productNaam);
    include_once "View/VoorraadView.php";
  }
}

?>
