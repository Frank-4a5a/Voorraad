<?php
/**
 *
 */
class LocatieModel
{
  private $pdo;

  function __construct()
  {
    $this->pdo = new PDO(DSN,USER,PASS);
  }
  public function getAll()
  {
    $sql = "SELECT * FROM locatie";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function addLocatie($locatieNaam)
  {
    $sql = "INSERT INTO `locatie`(`locatieNaam`) values('$locatieNaam')";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function editLocatie($locatieId, $locatieNaam)
  {
    $sql = "UPDATE `locatie` SET `locatieNaam`='$locatieNaam' WHERE `locatieId`='$locatieId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function deleteLocatie($locatieId)
  {
    $sql = "DELETE FROM `locatie` WHERE `locatieId`='$locatieId'";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }















}

?>
