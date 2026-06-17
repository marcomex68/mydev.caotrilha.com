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
  $dataResponse = [
    "success" => true,
    "message" => "Como utilizar a API",
    "data" => [
      "base_url" => "/api",
      "authentication" => [
        "type" => "Bearer Token",
        "login_route" => "/api/login",
        "header" => [
          "Authorization" => "Bearer {jwt}"
        ]
      ],
      "content_type" => "application/json",
      "steps" => [
        "1. Fazer login em POST /api/login com email e password em form-data",
        "2. Copiar o token JWT devolvido no campo data.jwt",
        "3. Enviar o token no header Authorization: Bearer {jwt}",
        "4. Consumir as restantes rotas protegidas"
      ],
      "routes" => [
        [
          "name" => "Ajuda da API",
          "method" => "GET",
          "path" => "/api",
          "auth" => false,
          "description" => "Mostra como utilizar a API"
        ],
        [
          "name" => "Login",
          "method" => "POST",
          "path" => "/api/login",
          "auth" => false,
          "body_type" => "form-data",
          "fields" => [
            "email" => "string",
            "password" => "string"
          ]
        ],
        [
          "name" => "Listar piratas",
          "method" => "GET",
          "path" => "/api/piratas",
          "auth" => true
        ],
        [
          "name" => "Mostrar pirata",
          "method" => "GET",
          "path" => "/api/piratas/{id}",
          "auth" => true
        ],
        [
          "name" => "Criar pirata",
          "method" => "POST",
          "path" => "/api/piratas",
          "auth" => true,
          "body_type" => "application/json",
          "fields" => [
            "nome" => "string",
            "alcunha" => "string|null",
            "idade" => "int|null",
            "pirata_tipo_id" => "int",
            "barco_id" => "int"
          ]
        ],
        [
          "name" => "Listar barcos",
          "method" => "GET",
          "path" => "/api/barcos",
          "auth" => true
        ],
        [
          "name" => "Mostrar barco",
          "method" => "GET",
          "path" => "/api/barcos/{id}",
          "auth" => true
        ],
        [
          "name" => "Criar barco",
          "method" => "POST",
          "path" => "/api/barcos",
          "auth" => true,
          "body_type" => "application/json",
          "fields" => [
            "nome" => "string",
            "barco_tipo_id" => "int",
            "bandeira" => "string|null"
          ]
        ],
        [
          "name" => "Listar tipos de pirata",
          "method" => "GET",
          "path" => "/api/tipo-piratas",
          "auth" => true
        ],
        [
          "name" => "Listar tipos de barco",
          "method" => "GET",
          "path" => "/api/tipo-barcos",
          "auth" => true
        ]
      ]
    ]
  ];

  Utils::jsonResponse($dataResponse);
  exit;
} elseif ($uri === "/signup" && $method === 'POST') {

  (new AuthController())->signupApi();

} elseif ($uri === "/login" && $method === 'POST') {

  (new AuthController())->loginApi();

} elseif ($uri === "/caes" && $method === 'GET') {
  $data = AuthMiddleware::check();
  (new CaesController())->listarCaesDonoApi($data->id);
}elseif ($uri === "/caes" && $method === "GET") {
    $data = AuthMiddleware::check();
    (new CaesController())->listarCaesDonoApi(
    (int) $data->id
    );
} 

elseif (
    preg_match('#^/caes/(\d+)$#', $uri, $matches)&& $method === "GET") {
    $data = AuthMiddleware::check();
    $caoId = (int) $matches[1];
    (new CaesController())->detalheCaoApi(
        (int) $data->id,
        $caoId
    );

} elseif ($uri === "/trilhas" && $method === 'GET') {
  $data = AuthMiddleware::check();
  (new TrilhaController())->listarTrilhasDonoApi($data->id);
} elseif (preg_match('/\/trilhas\/(\d+)/', $uri, $matches) && $method === 'GET') {
  
  $trilhaId = $matches[1];
  (new TrilhaController())->detalheTrilhaApi($trilhaId);
} elseif ($uri === "/addCao" && $method === 'POST') {
  $data = AuthMiddleware::check();
  (new CaesController())->createCaoApi($data->id);
} elseif ($uri === "/estadia" && $method === 'GET') {
  $data = AuthMiddleware::check();
  (new EstadiaController())->listarEstadiasApi($data->id);

} elseif (preg_match('/\/estadia\/(\d+)/', $uri, $matches) && $method === 'GET') {
  $data = AuthMiddleware::check();
  $estadiaId = $matches[1];
  (new EstadiaController())->detalheEstadiaApi($data->id, $estadiaId);
} elseif ($uri === "/user/profile" && $method === 'GET') {
  $data = AuthMiddleware::check();
  (new AuthController())->userProfileApi($data->id);
}
else {
  $dataResponse = [
    'success' => false,
    'message' => 'Not found.',
    'data' => []
  ];

  Utils::jsonResponse($dataResponse, 401);

  exit;
}


?>