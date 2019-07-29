<?php
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
require "config.php";
require "Router/Router.php";
require "Controller/ProductController.php";
require "Model/ProductModel.php";
require "Controller/FabrikantController.php";
require "Model/FabrikantModel.php";
require "Controller/LocatieController.php";
require "Model/LocatieModel.php";
require "Controller/VoorraadController.php";
require "Model/VoorraadModel.php";
require "Controller/LoginController.php";
require "Model/LoginModel.php";
require "Controller/HomeController.php";



include_once "View/FooterView.php";
include_once "View/Headerview.php";
$router = new Router();

?>
