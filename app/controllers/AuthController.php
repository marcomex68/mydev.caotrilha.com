<?php

require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . "/../config/DatabaseSingle.php";
require_once __DIR__ . "/../utils/Utils.php";
require_once __DIR__ . '/../dao/EmailVerificationDAO.php';
require_once __DIR__ . "/../services/MyMailerService.php";
require_once __DIR__ . "/../config/jwt.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . '/../dao/TrilhaDAO.php';
require_once __DIR__ . '/../models/Trilhas.php';

use Firebase\JWT\JWT;

class AuthController
{
    private function view($name, $data = [])
    {
        extract($data, EXTR_SKIP);
        require_once __DIR__ . '/../../public/views/' . $name . '.php';
    }

    public function loginWeb()
    {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($email) || empty($password)) {
            $_SESSION['toast'] = ['type' => 'error', 'message' => "Email e password são obrigatórios"];
            header("Location: /login");
            exit;
        }

        $user = (new UserDAO())->findByEmail($email);

        if (!$user || !password_verify($password, $user->getPassword())) {
            $_SESSION['toast'] = ['type' => 'error', 'message' => "Dados de login inválidos"];
            header("Location: /login");
            exit;
        }

        $_SESSION['token'] = [
            'id' => $user->getId(),
            'username' => $user->getNome(),
            'email' => $user->getEmail(),
            'is_admin' => $user->getIsAdmin()
        ];

        $_SESSION['toast'] = ['type' => 'success', 'message' => "Bem-vindo de volta, " . $user->getNome()];
        header("Location: /admin");
        exit;
    }

    public function logoutWeb()
    {
        session_destroy();
        session_start();
        $_SESSION['toast'] = ['type' => 'success', 'message' => "Sessão terminada com sucesso!"];
        header("Location: /home");
        exit;
    }

    public function createTrilhaWeb()
    {
        try {
            $nome = trim($_POST["nome"] ?? '');
            $kms = trim($_POST['kms'] ?? '');
            $localidade = trim($_POST['localidade'] ?? '');

            if ($nome === '' || $kms === '' || $localidade === '') {
                throw new Exception("Todos os campos são obrigatórios.");
            }

            $trilhaDAO = new TrilhaDAO();

            if ($trilhaDAO->findByNome($nome)) {
                throw new Exception("Já existe uma trilha com esse nome.");
            }

            $trilha = new Trilha(0, $nome, (float)$kms, $localidade);

            $trilhaDAO->createTrilha($trilha);

            $_SESSION['toast'] = ['type' => 'success', 'message' => "Trilha criada com sucesso!"];
            header("Location: /trilhas");
            exit;

        } catch (Exception $e) {
            $_SESSION['toast'] = ['type' => 'error', 'message' => $e->getMessage()];
            header("Location: /trilhas");
            exit;
        }
    }
}