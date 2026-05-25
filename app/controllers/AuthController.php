<?php

require_once __DIR__ . "/../dao/UserDAO.php";

class AuthController
{
    private function view($name, $data = []) {
    extract($data, EXTR_SKIP);
    require_once __DIR__ . '/../../public/views/' . $name . '.php';
  }

  public function loginWeb() {
    $email = trim($_POST['email']) ?? '';
    
    $password = trim($_POST['password']) ?? '';
    
    // Se não houver email ou password, mostrar erro
    // é preciso lançar exceção para o index.php apanhar e mostrar o erro via flash message
    if(empty($email) || empty($password)) {
      $_SESSION['toast'] = [
        'type' => 'error',
        'message' => "Email e password são obrigatórios"
      ];
      header("Location: /login");
      exit;
    }

    $user = (new UserDAO())->findByEmail($email);

    if(!$user) {
      $_SESSION['toast'] = [
        'type' => 'error',
        'message' => "Dados de login inválidos"
      ];
      header("Location: /login");
      exit;
    }
    // Utilizador foi encontrado - verificar password
    if(password_verify($password, $user->getPassword())) {
      //var_dump("Password correta");
      $_SESSION['token'] = [
        'id' => $user->getId(),
        'username' => $user->getNome(),
        'email' => $user->getEmail(),
        'is_admin' => $user->getIsAdmin()
      ];

      $_SESSION['toast'] = [
        'type' => 'success',
        'message' => "Bem-vindo de volta, " . $user->getNome() . "!"
      ];

       header("Location: /admin");
       exit;
      //header("Location: /");
      //exit;
    } else {
      $_SESSION['toast'] = [
        'type' => 'error',
        'message' => "Dados de login inválidos"
      ];
      header("Location: /login");
      exit;
    }    

}

  public function logoutWeb() {
    $toast = ['type' => 'success', 'message' => "Sessão terminada com sucesso!"];
    session_destroy();
    session_start();             
    $_SESSION['toast'] = $toast; 
    header("Location: /home");
    exit;
}
} 