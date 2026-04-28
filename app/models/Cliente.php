<?php
 
class Cliente

{

  private int $id;

  private string $nome;

  private string $telefone;

  private string $email;

  private string $morada;

  private string $password;
 
  public function __construct(

    int $id = 0,

    string $nome = '',

    string $telefone = '',

    string $email = '',

    string $morada = '',

    string $password = ''

  ) {

    $this->id = $id;

    $this->nome = $nome;

    $this->telefone = $telefone;

    $this->email = $email;

    $this->morada = $morada;

    $this->password = $password;

  }
 
  public function getId(): int

  {

    return $this->id;

  }

  public function setId(int $id): void

  {

    $this->id = $id;

  }
 
  public function getNome(): string

  {

    return $this->nome;

  }

  public function setNome(string $nome): void

  {

    $this->nome = $nome;

  }
 
  public function getTelefone(): string

  {

    return $this->telefone;

  }

  public function setTelefone(string $telefone): void

  {

    $this->telefone = $telefone;

  }
 
  public function getEmail(): string

  {

    return $this->email;

  }

  public function setEmail(string $email): void

  {

    $this->email = $email;

  }
 
  public function getMorada(): string

  {

    return $this->morada;

  }

  public function setMorada(string $morada): void

  {

    $this->morada = $morada;

  }
 
  public function getPassword(): string

  {

    return $this->password;

  }

  public function setPassword(string $password): void

  {

    $this->password = $password;

  }

}
 