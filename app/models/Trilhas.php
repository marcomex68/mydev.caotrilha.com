<?php
 
class Trilha

{

  private int $id;

  private int $idCao;

  private string $nome;

  private string $data;

  private float $kms;

  private string $localidade;

  private string $localizacao;
 
  public function __construct(

    int $id = 0,

    int $idCao = 0,

    string $nome = '',

    string $data = '',

    float $kms = 0.0,

    string $localidade = '',

    string $localizacao = ''

  ) {

    $this->id = $id;

    $this->idCao = $idCao;

    $this->nome = $nome;

    $this->data = $data;

    $this->kms = $kms;

    $this->localidade = $localidade;

    $this->localizacao = $localizacao;

  }
 
  public function getId(): int

  {

    return $this->id;

  }

  public function setId(int $id): void

  {

    $this->id = $id;

  }
 
  public function getIdCao(): int

  {

    return $this->idCao;

  }

  public function setIdCao(int $idCao): void

  {

    $this->idCao = $idCao;

  }
 
  public function getNome(): string

  {

    return $this->nome;

  }

  public function setNome(string $nome): void

  {

    $this->nome = $nome;

  }
 
  public function getData(): string

  {

    return $this->data;

  }

  public function setData(string $data): void

  {

    $this->data = $data;

  }
 
  public function getKms(): float

  {

    return $this->kms;

  }

  public function setKms(float $kms): void

  {

    $this->kms = $kms;

  }
 
  public function getLocalidade(): string

  {

    return $this->localidade;

  }

  public function setLocalidade(string $localidade): void

  {

    $this->localidade = $localidade;

  }
 
  public function getLocalizacao(): string

  {

    return $this->localizacao;

  }

  public function setLocalizacao(string $localizacao): void

  {

    $this->localizacao = $localizacao;

  }

}
 