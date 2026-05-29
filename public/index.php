<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/controllers/WebController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/middleware/AuthMiddlewareWeb.php';
require_once __DIR__ . '/../app/services/MyMailerService.php';






$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace("mydev.caotrilha.com/public", "", $uri);

$method = $_SERVER['REQUEST_METHOD'];
$isLogin = AuthMiddlewareWeb::isLogin();

if($uri === '/' || $uri === '/index' || $uri === '/home') {
  
  (new WebController())->index();

} elseif ($uri === '/login' && $method === "GET") {
  (new WebController())->login();

} elseif ($uri === '/login' && $method === "POST") {
  
  (new AuthController())->loginWeb();

} elseif ($uri === '/admin' && $method === "GET") {
  if (!$isLogin) {
    $_SESSION['toast'] = [
      'type' => 'error',
      'message' => 'Acesso negado. Faça login para continuar.'
    ];
    header("Location: /login");
    exit();
  }else{
    (new WebController())->admin();
  }
  

} elseif ($uri === '/clientes' && $method === "GET") {

  if (!$isLogin) {
    $_SESSION['toast'] = [
      'type' => 'error',
      'message' => 'Acesso negado. Faça login para continuar.'
    ];
    header("Location: /login");
    exit();
  }else{
    (new WebController())->clientes();
  }

}

  elseif (preg_match('#^/users/(\d+)$#', $uri, $m) && $method === "GET") {

  if (!$isLogin) {
  $_SESSION['toast'] = [
 'type' => 'error',
'message' => 'Acesso negado. Faça login para continuar.'
 ];
  header("Location: /login");
  exit();
}else{
 $clienteId = $m[1];
 (new WebController())->clienteById($clienteId);
  }

  }


elseif ($uri === '/caes' && $method === "GET") {

  if (!$isLogin) {
    $_SESSION['toast'] = [
      'type' => 'error',
      'message' => 'Acesso negado. Faça login para continuar.'
    ];
    header("Location: /login");
    exit();
  }else{
    (new WebController())->caes();
  }

} elseif ($uri === '/trilhas' && $method === "GET") {

  if (!$isLogin) {
    $_SESSION['toast'] = [
      'type' => 'error',
      'message' => 'Acesso negado. Faça login para continuar.'
    ];
    header("Location: /login");
    exit();
  }else{
    (new WebController())->trilhas();
  }

} elseif ($uri === '/estadias' && $method === "GET") {

  if (!$isLogin) {
    $_SESSION['toast'] = [
      'type' => 'error',
      'message' => 'Acesso negado. Faça login para continuar.'
    ];
    header("Location: /login");
    exit();
  }else{
    (new WebController())->estadias();
  }

  } elseif ($uri === '/createTrilha' && $method === "GET") {
  
  (new WebController())->createTrilha();

} elseif ($uri === '/createTrilha' && $method === "POST") {
  
  (new AuthController())->createTrilhaWeb();
}
elseif ($uri === '/logout' && $method === "POST") {
  
  (new AuthController())->logoutWeb();


}elseif ($uri === '/clientes/delete' && $method === "POST") {

    if (!$isLogin) {
        $_SESSION['toast'] = [
            'type' => 'error',
            'message' => 'Acesso negado. Faça login para continuar.'
        ];

        header("Location: /login");
        exit();
    }

    $clienteId = $_POST['id'];

    (new WebController())->deleteCliente($clienteId);
}
elseif ($uri === '/verify-email' && $method === 'GET') {
    (new AuthController())->verifyEmailForm();
}
 
elseif ($uri === '/verify-email' && $method === 'POST') {
    try {
        (new AuthController())->verifyEmailSubmit();
    } catch (Exception $e) {
        $_SESSION['flash_error'] = $e->getMessage();
        header("Location: /verify-email?token=" . urlencode($_POST['token'] ?? ''));
        exit;
    }
}
 

else {
  
  echo "404";

}