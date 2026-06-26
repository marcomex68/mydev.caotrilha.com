<?php

class WebController
{
    private function view($viewName, $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../../public/views/{$viewName}.php";
    }

    public function index()
    {
        $this->view('home');
    }

    public function login()
    {
        $this->view('login');
    }

    public function admin()
    {
        $usersCount = (new UserDAO())->getUsersCount();
        $caesCount = (new UserDAO())->getCaesCount();
        $trilhasCount = (new UserDAO())->getTrilhasCount();
        $estadiasCount = (new UserDAO())->getEstadiasCount();
        $this->view('admin', [
            'userCount' => $usersCount,
            'caesCount' => $caesCount,
            'trilhasCount' => $trilhasCount,
            'estadiasCount' => $estadiasCount
        ]);
    }

    public function clientes()
    {
        $users = (new UserDAO())->getUsers();
        $this->view('clientes', [
            'users' => $users
        ]);
    }

    public function caes()
    {
        $caes = (new UserDAO())->getCaes();
        $this->view('caes', [
            'caes' => $caes
        ]);
    }

    public function trilhas()
    {
        require_once __DIR__ . '/../dao/TrilhaDAO.php';
        require_once __DIR__ . '/../models/Trilhas.php';

        $trilhas = (new TrilhaDAO())->listarTrilhas();
        $this->view('trilhas', [
            'trilhas' => $trilhas
        ]);
    }

    public function estadias()
    {
        $estadias = (new UserDAO())->getEstadias();
        $this->view('estadias', [
            'estadias' => $estadias
        ]);
    }

    public function clienteById($clienteId)
    {
        $cliente = (new UserDAO())->findById($clienteId);
        $caes = [];
        $this->view('cliente', [
            'cliente' => $cliente,
            'caes' => $caes
        ]);
    }

    public function deleteCliente($clienteId)
    {
        (new UserDAO())->delete($clienteId);
        header('Location: /clientes');
        exit;
    }

    public function createTrilha()
    {
        $this->view('createTrilha');
    }

    public function verifyEmail(string $token): void
    {
        $this->view("verify-email", ["token" => $token]);
    }
}