<?php
require __DIR__ . "/../../vendor/autoload.php";

require_once "../../app/utils/Utils.php";

require "../../app/controllers/AuthController.php";
require "../../app/controllers/CaesController.php";
require "../../app/controllers/TrilhaController.php";
require "../../app/middleware/AuthMiddleware.php";
require "../../app/controllers/EstadiaController.php";

header("Content-Type: application/json; charset=UTF-8");

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$uri = str_replace("/api", "", $uri);
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET" && ($uri === "/index" || $uri === "/" || $uri === "/help")) {

  Utils::jsonResponse([
    "success" => true,
    "message" => "API OK"
  ]);
  exit;

}

elseif ($uri === "/signup" && $method === 'POST') {

  (new AuthController())->signupApi();

}

elseif ($uri === "/login" && $method === 'POST') {

  (new AuthController())->loginApi();

}

elseif ($uri === "/caes" && $method === 'GET') {

  $data = AuthMiddleware::check();
  (new CaesController())->listarCaesDonoApi($data->id);

}

elseif (preg_match('#^/caes/(\d+)$#', $uri, $matches) && $method === "GET") {

  $data = AuthMiddleware::check();
  $caoId = (int) $matches[1];

  (new CaesController())->detalheCaoApi(
    (int) $data->id,
    $caoId
  );

}

/* ✅ TRILHAS (corrigido só consistência) */

elseif ($uri === "/trilhas" && $method === 'GET') {

  $data = AuthMiddleware::check();
  (new TrilhaController())->listarTrilhasDonoApi($data->id);

}

elseif ($uri === "/createTrilha" && $method === 'POST') {

  $data = AuthMiddleware::check();
  (new TrilhaController())->createTrilhaApi($data->id);

}

elseif (preg_match('#^/trilhas/(\d+)$#', $uri, $matches) && $method === 'GET') {

  $trilhaId = (int)$matches[1];
  (new TrilhaController())->detalheTrilhaApi($trilhaId);

}

elseif ($uri === "/addCao" && $method === 'POST') {

  $data = AuthMiddleware::check();
  (new CaesController())->createCaoApi($data->id);

}

elseif ($uri === "/estadia" && $method === 'GET') {

  $data = AuthMiddleware::check();
  (new EstadiaController())->listarEstadiasApi($data->id);

}

elseif (preg_match('#^/estadia/(\d+)$#', $uri, $matches) && $method === 'GET') {

  $data = AuthMiddleware::check();
  $estadiaId = (int)$matches[1];

  (new EstadiaController())->detalheEstadiaApi($data->id, $estadiaId);

}

elseif ($uri === "/user/profile" && $method === 'GET') {

  $data = AuthMiddleware::check();
  (new AuthController())->userProfileApi($data->id);

}

else {
  Utils::jsonResponse([
    'success' => false,
    'message' => 'Not found.',
    'data' => []
  ], 404);
  exit;
}