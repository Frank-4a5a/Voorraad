<?php
/**
 *
 */
class LoginModel
{
  private $pdo;
  function __construct()
  {
    $this->pdo = new PDO(DSN, USER, PASS);
  }
  public function checkInlog($gebruikersnaam, $wachtwoord)
  {
    $sql = "SELECT * FROM medewerker WHERE gebruikersnaam='$gebruikersnaam' AND wachtwoord=PASSWORD('$wachtwoord')";
    $pdo = $this->pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}

?>
