<?php
 
class Estadia

{

  private int $id;

  private int $idCao;

  private string $dataEntrada;

  private string $dataSaida;

  private float $precoTotal;

  private bool $pago;
 
  public function __construct(

    int $id = 0,

    int $idCao = 0,

    string $dataEntrada = '',

    string $dataSaida = '',

    float $precoTotal = 0.0,

    bool $pago = false

  ) {

    $this->id = $id;

    $this->idCao = $idCao;

    $this->dataEntrada = $dataEntrada;

    $this->dataSaida = $dataSaida;

    $this->precoTotal = $precoTotal;

    $this->pago = $pago;

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
 
  public function getDataEntrada(): string

  {

    return $this->dataEntrada;

  }

  public function setDataEntrada(string $dataEntrada): void

  {

    $this->dataEntrada = $dataEntrada;

  }
 
  public function getDataSaida(): string

  {

    return $this->dataSaida;

  }

  public function setDataSaida(string $dataSaida): void

  {

    $this->dataSaida = $dataSaida;

  }
 
  public function getPrecoTotal(): float

  {

    return $this->precoTotal;

  }

  public function setPrecoTotal(float $precoTotal): void

  {

    $this->precoTotal = $precoTotal;

  }
 
  public function isPago(): bool

  {

    return $this->pago;

  }

  public function setPago(bool $pago): void

  {

    $this->pago = $pago;

  }

}
 