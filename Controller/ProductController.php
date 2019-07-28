<?php
/**
 *
 */
class ProductController
{

  private $model;

  function __construct()
  {
    $this->model = new ProductModel();
  }
  public function showProduct()
  {
    $model = $this->model;
    $productJoined = $model->getAllJoined();
    include_once "View/ProductView.php";
  }
  public function addProduct()
  {
    $productNaam = $_POST["productNaam"];
    $type = $_POST["type"];
    $fabrikantId = $_POST["fabrikantId"];
    $inkoopprijs = $_POST["inkoopprijs"];
    $verkoopprijs = $_POST["verkoopprijs"];
    $model = $this->model;
    $model->addProduct($productNaam, $type, $fabrikantId, $inkoopprijs, $verkoopprijs);
    header("Location: /ProductController/showProduct");
  }
  public function loadAddProductView()
  {
    $model = new FabrikantModel();
    $fabrikant = $model->getAll();
    include_once "View/AddProductView.php";
  }

  public function loadEditProductView($params)
  {
    $model = new FabrikantModel();
    $fabrikant = $model->getAll();
    $productId = $params[0];
    $productNaam = $params[1];
    $type = $params[2];
    $fabrikantId = $params[3];
    $inkoopprijs = $params[4];
    $verkoopprijs = $params[5];
    include_once "View/EditProductView.php";
  }
  public function editProduct()
  {
    $productId = $_POST["productId"];
    $productNaam = $_POST["productNaam"];
    $type = $_POST["type"];
    $fabrikantId = $_POST["fabrikantId"];
    $inkoopprijs = $_POST["inkoopprijs"];
    $verkoopprijs = $_POST["verkoopprijs"];
    $model = $this->model;
    $model->editProduct($productId, $productNaam, $type, $fabrikantId, $inkoopprijs, $verkoopprijs);
    header("Location: /ProductController/showProduct");
  }
  public function deleteProduct($params)
  {
    $productId = $params[0];
    $model = $this->model;
    $model->deleteProduct($productId);
    header("Location: /ProductController/showProduct");
  }
  public function searchProduct()
  {
    $productNaam = $_POST["productNaam"];
    $model = $this->model;
    $productJoined = $model->searchProduct($productNaam);
    include_once "View/ProductView.php";
  }
}

?>
