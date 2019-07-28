<?php
/**
 *
 */
class FabrikantModel
{
  private $pdo;

  function __construct()
  {
    $this->pdo = new PDO(DSN,USER,PASS);
  }
  public function getAll()
  {
    $sql = "SELECT * FROM fabrikant";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function addFabrikant($fabrikantNaam)
  {
    $sql = "INSERT INTO `fabrikant`(`fabrikantNaam`) values('$fabrikantNaam')";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function editFabrikant($fabrikantId, $fabrikantNaam)
  {
    $sql = "UPDATE `fabrikant` SET `fabrikantNaam`='$fabrikantNaam' WHERE `fabrikantId`='$fabrikantId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function deleteFabrikant($fabrikantId)
  {
    $sql = "DELETE FROM `fabrikant` WHERE `fabrikantId`='$fabrikantId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }















}

?>
