<?php
/**
 *
 */
class VoorraadModel
{
  private $pdo;

  function __construct()
  {
    $this->pdo = new PDO(DSN,USER,PASS);
  }
  public function getAll()
  {
    $sql = "SELECT * FROM voorraad";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function getAllJoined()
  {
    $sql = "SELECT * FROM stock NATURAL JOIN product";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function addVoorraad($productId, $locatieId, $aantal, $minimumAantal)
  {
    $sql = "INSERT INTO `voorraad`(`productId`, `locatieId`, `aantal`, `minimumAantal`)
      values('$productId', '$locatieId', '$aantal', '$minimumAantal')";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function editVoorraad($productId, $productIdOld, $locatieId, $locatieIdOld, $aantal, $minimumAantal)
  {
    $sql = "UPDATE `voorraad` SET `productId`='$productId' , `locatieId`='$locatieId', `aantal`='$aantal', `minimumAantal`='$minimumAantal' WHERE `productId`='$productIdOld' AND `locatieId`='$locatieIdOld'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function deleteVoorraad($productId, $locatieId)
  {
    $sql = "DELETE FROM `voorraad` WHERE `productId`='$productId' AND `locatieId`='$locatieId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function searchVoorraad($productNaam)
  {
    $sql = "SELECT * FROM voorraad NATURAL JOIN product NATURAL JOIN locatie WHERE productNaam LIKE '%$productNaam%'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}

?>
