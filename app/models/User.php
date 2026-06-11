<?php

class User

{

  private int $id;

  private bool $is_admin;

  private string $nome;

  private string $telefone;

  private string $email;

  private string $morada;

  private string $password;

  private bool $is_verified;

  private string $verified_at;

  private string $created_at;

  private string $deleted_at;
 

  public function __construct(
    int $id = 0,
    bool $is_admin = false,
    string $nome = '',
    string $telefone = '0',
    string $email = '',
    string $morada = '',
    string $password = '',
    bool $is_verified = false,
    string $verified_at = '',
    string $created_at = '',
    string $deleted_at = ''
  ) {

    $this->id = $id;

    $this->is_admin = $is_admin;

    $this->nome = $nome;

    $this->telefone = $telefone;

    $this->email = $email;

    $this->morada = $morada;

    $this->password = $password;

    $this->is_verified = $is_verified;

    $this->verified_at = $verified_at;

    $this->created_at = $created_at;

    $this->deleted_at = $deleted_at;
  }

  public function getId(): int

  {

    return $this->id;
  }

  public function setId(int $id): void

  {

    $this->id = $id;
  }

  public function getIsAdmin(): bool

  {

    return $this->is_admin;
  }

  public function setIsAdmin(bool $is_admin): void

  {

    $this->is_admin = $is_admin;
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

  public function getIsVerified(): bool

  {

    return $this->is_verified;
  }

  public function setIsVerified(bool $is_verified): void

  {

    $this->is_verified = $is_verified;
  }

  public function getVerifiedAt(): string

  {

    return $this->verified_at;
  }

  public function setVerifiedAt(string $verified_at): void

  {

    $this->verified_at = $verified_at;
  }

  public function getCreatedAt(): string

  {

    return $this->created_at;
  }

  public function setCreatedAt(string $created_at): void

  {

    $this->created_at = $created_at;
  }

  public function getDeletedAt(): string

  {

    return $this->deleted_at;
  }

  public function setDeletedAt(string $deleted_at): void

  {

    $this->deleted_at = $deleted_at;
  }

  public function toArray(): array
  {
    return [
      'id' => $this->getId(),
      'nome' => $this->getNome(),
      'email' => $this->getEmail(),
      'is_admin' => $this->getIsAdmin(),
      'created_at' => $this->getCreatedAt(),
      'deleted_at' => $this->getDeletedAt()
    ];
  }
}
