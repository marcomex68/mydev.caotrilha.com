<?php

require_once __DIR__ . "/../dao/UserDAO.php";

class AuthController
{
    private function view($name, $data = []) {
    extract($data, EXTR_SKIP);
    require_once __DIR__ . '/../../public/views/' . $name . '.php';
  }

  public function loginWeb()
  {
    $email = trim($_POST['email']) ?? '';

    $password = trim($_POST['password']) ?? '';


    if (empty($email) || empty($password)) {
      echo "Email e password são obrigatórios";
      exit;
    }

    $user = (new UserDAO())->findByEmail($email);
    // Criar session
    if (!$user) {
      die("Utilizador não encontrado ou não é administrador");
    }

    session_start();
        $_SESSION['user_id']    = $user->getId();
        $_SESSION['user_name']  = $user->getNome();
        $_SESSION['is_admin']   = $user->getIsAdmin();
 
        header('Location: /admin');
        exit;

  }

} 