<?php

class WebController {


  private function view($viewName, $data = []) {
    extract($data);
    require_once __DIR__ . "/../../public/views/{$viewName}.php";
  }

  public function index() {
    $this->view('home');
  }

  public function login()
  {
    $this->view('login');
  }

  public function admin()
  {
    
    $this->view('admin');
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
    $trilhas = (new UserDAO())->getTrilhas();
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
}