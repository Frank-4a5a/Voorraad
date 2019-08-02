<?php
/**
 *
 */
class ProductModel
{
  private $pdo;

  function __construct()
  {
    $this->pdo = new PDO(DSN,USER,PASS);
  }
  public function getAll()
  {
    $sql = "SELECT * FROM product";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function getAllJoined()
  {
    $sql = "SELECT * FROM product NATURAL JOIN brand";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function addProduct($productNaam, $type, $fabrikantId, $inkoopprijs, $verkoopprijs)
  {
    $sql = "INSERT INTO `product`(`productNaam`, `type`, `fabrikantId`, `inkoopprijs`, `verkoopprijs`)
      values('$productNaam', '$type', '$fabrikantId', '$inkoopprijs', '$verkoopprijs')";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function editProduct($productId, $productNaam, $type, $fabrikantId, $inkoopprijs, $verkoopprijs)
  {
    $sql = "UPDATE `product` SET `productNaam`='$productNaam' , `type`='$type', `fabrikantId`='$fabrikantId' , `inkoopprijs`='$inkoopprijs', `verkoopprijs`='$verkoopprijs' WHERE `productId`='$productId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function deleteProduct($productId)
  {
    $sql = "DELETE FROM `product` WHERE `productId`='$productId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function searchProduct($productNaam)
  {
    $sql = "SELECT * FROM product NATURAL JOIN fabrikant WHERE productNaam LIKE '%$productNaam%'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}

?>
