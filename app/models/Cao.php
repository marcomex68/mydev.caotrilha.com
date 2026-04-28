<?php
 
class Cao

{

  private int $id;

  private int $idCliente;

  private string $nome;

  private string $raca;

  private int $idade;

  private float $peso;

  private string $sexo;

  private bool $esterilizado;
 
  public function __construct(

    int $id = 0,

    int $idCliente = 0,

    string $nome = '',

    string $raca = '',

    int $idade = 0,

    float $peso = 0.0,

    string $sexo = '',

    bool $esterilizado = false

  ) {

    $this->id = $id;

    $this->idCliente = $idCliente;

    $this->nome = $nome;

    $this->raca = $raca;

    $this->idade = $idade;

    $this->peso = $peso;

    $this->sexo = $sexo;

    $this->esterilizado = $esterilizado;

  }
 
  public function getId(): int

  {

    return $this->id;

  }

  public function setId(int $id): void

  {

    $this->id = $id;

  }
 
  public function getIdCliente(): int

  {

    return $this->idCliente;

  }

  public function setIdCliente(int $idCliente): void

  {

    $this->idCliente = $idCliente;

  }
 
  public function getNome(): string

  {

    return $this->nome;

  }

  public function setNome(string $nome): void

  {

    $this->nome = $nome;

  }
 
  public function getRaca(): string

  {

    return $this->raca;

  }

  public function setRaca(string $raca): void

  {

    $this->raca = $raca;

  }
 
  public function getIdade(): int

  {

    return $this->idade;

  }

  public function setIdade(int $idade): void

  {

    $this->idade = $idade;

  }
 
  public function getPeso(): float

  {

    return $this->peso;

  }

  public function setPeso(float $peso): void

  {

    $this->peso = $peso;

  }
 
  public function getSexo(): string

  {

    return $this->sexo;

  }

  public function setSexo(string $sexo): void

  {

    $this->sexo = $sexo;

  }
 
  public function isEsterilizado(): bool

  {

    return $this->esterilizado;

  }

  public function setEsterilizado(bool $esterilizado): void

  {

    $this->esterilizado = $esterilizado;

  }

}
 