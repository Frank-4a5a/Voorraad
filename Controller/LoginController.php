<?php
/**
 *
 */
class LoginController
{
  private $model;

  function __construct()
  {
    $this->model = new LoginModel();
  }
  public function login()
  {
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $wachtwoord = $_POST["wachtwoord"];
    $result = $this->model->checkInlog($gebruikersnaam, $wachtwoord);
    if (!empty($result))
    {
      $_SESSION["loggedInAs"] = $gebruikersnaam;
    }
    include_once "View/HomeView.php";
  }
  public function logout()
  {
    session_destroy();
    Header("Location: /HomeController/goToHome");
  }
}

?>
