<?php
/**
 * [Router description]
 */
class Router
{
  private $controllerName;
  private $methodName;
  private $params;


  function __construct()
  {
    $url = $_SERVER['REQUEST_URI'];
    $filteredUrl = $this->filterUrl($url);
    $controllerFilePath = $this->determineDestination($filteredUrl);
    $controllerFileAndMethodExists = $this->controllerFileAndMethodExists($controllerFilePath);
    $this->sendToDestination($controllerFilePath, $controllerFileAndMethodExists);
  }


  private function filterUrl($url)
  {
    return array_slice(explode('/', $url), 1);
  }

  private function determineDestination($filteredUrl)
  {
    $this->controllerName = array_shift($filteredUrl);
    $this->methodName = array_shift($filteredUrl);
    if (!empty($filteredUrl))
    {
      $this->params = $filteredUrl;
    }
    return "Controller/" . ucfirst($this->controllerName) . ".php";
  }

  private function controllerFileAndMethodExists($controllerFilePath)
  {
    if (file_exists($controllerFilePath)&&method_exists(ucfirst($this->controllerName),$this->methodName))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  private function sendToDestination($controllerFilePath, $controllerFileAndMethodExists)
  {
    if ($controllerFileAndMethodExists == false)
    {
      include_once "View/HomeView.php";
      return;
    }
    $methodName = $this->methodName;
    $controller = new $this->controllerName();
    $controller->$methodName($this->params);
  }
}
?>
