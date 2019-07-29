<html lang="en" dir="ltr">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/Style/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
        <nav class="nav-bar">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">ToolsForEver</a>
          </div>
          <?php if (isset($_SESSION["loggedInAs"])) {?>
          <ul class="nav navbar-nav">
            <li><a href="/ProductController/showProduct">Producten</a></li>
            <li><a href="/VoorraadController/showVoorraad">Voorraad</a></li>
            <li><a href="/LocatieController/showLocatie">Locatie</a></li>
            <li><a href="/FabrikantController/showFabrikant">Fabrikant</a></li>
          </ul>
          <?php }if (!isset($_SESSION["loggedInAs"])) {?>
          <ul class="nav navbar-nav navbar-right">
            <form action="/LoginController/login" method="post">
              <li><input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required></li>
              <li><input type="password" name="wachtwoord" placeholder="Wachtwoord" required></li>
              <li><input type="submit" value="Log in"></li>
            </form>
          </ul>
          <?php }else{?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/LoginController/logout">Log uit</a></li>
            </ul>
        <?php
        }
        ?>
        </nav>
    </div>
    <div class="container">
