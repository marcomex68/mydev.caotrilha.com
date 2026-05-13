<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/controllers/WebController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/middleware/AuthMiddlewareWeb.php';
require_once __DIR__ . '/../app/services/Mailer.php';






$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace("mydev.caotrilha.com/public", "", $uri);

$method = $_SERVER['REQUEST_METHOD'];

if($uri === '/' || $uri === '/index' || $uri === '/home') {
  
  (new WebController())->index();

} elseif ($uri === '/login' && $method === "GET") {
  (new WebController())->login();

} elseif ($uri === '/login' && $method === "POST") {
  
  (new AuthController())->loginWeb();

} elseif ($uri === '/admin' && $method === "GET") {

  (new WebController())->admin();

} elseif ($uri === '/clientes' && $method === "GET") {

  (new WebController())->clientes();

} elseif ($uri === '/caes' && $method === "GET") {

  (new WebController())->caes();

} elseif ($uri === '/trilhas' && $method === "GET") {

  (new WebController())->trilhas();

} elseif ($uri === '/estadias' && $method === "GET") {

  (new WebController())->estadias();

} elseif ($uri === '/definicoes' && $method === "GET") {

  (new WebController())->definicoes();

} elseif ($uri === '/logout' && $method === "POST") {
  
  (new AuthController())->logoutWeb();


}else {
  
  echo "404";

}