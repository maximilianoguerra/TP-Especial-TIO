<?php

define('RESOURCE', 0);
define('PARAMS', 1);



require_once('api/config/Router.php');
require_once('api/controller/TareasApiController.php');


$router = new Router();
//url, verb, controller, method
$router->AddRoute("comentarios", "GET", "TareasApiController", "getComents");
// $router->AddRoute("comentarios/:id", "GET", "TareasApiController", "getComent");
$router->AddRoute("comentarios/:id", "GET", "TareasApiController", "getComentsdeUnProducto");
$router->AddRoute("comentarios", "POST", "TareasApiController", "createComentario");
$router->AddRoute("comentarios/:id", "DELETE", "TareasApiController", "deleteComentario");
$router->AddRoute("comentarios/:id", "PUT", "TareasApiController", "editComentario");

$route = $_GET['resource'];
$array = $router->Route($route);

if(sizeof($array) == 0)
  echo "404";
else
{
  $controller = $array[0];
  $metodo = $array[1];
  $url_params = $array[2];
  echo (new $controller())->$metodo($url_params);
}





?>
