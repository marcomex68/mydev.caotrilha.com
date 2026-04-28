<?php
 
class HoraTrilha

{

  private int $id;

  private int $idTrilha;

  private ?string $horaInicio;

  private ?string $horaFim;
 
  public function __construct(

    int $id = 0,

    int $idTrilha = 0,

    ?string $horaInicio = null,

    ?string $horaFim = null

  ) {

    $this->id = $id;

    $this->idTrilha = $idTrilha;

    $this->horaInicio = $horaInicio;

    $this->horaFim = $horaFim;

  }
 
  public function getId(): int

  {

    return $this->id;

  }

  public function setId(int $id): void

  {

    $this->id = $id;

  }
 
  public function getIdTrilha(): int

  {

    return $this->idTrilha;

  }

  public function setIdTrilha(int $idTrilha): void

  {

    $this->idTrilha = $idTrilha;

  }
 
  public function getHoraInicio(): ?string

  {

    return $this->horaInicio;

  }

  public function setHoraInicio(?string $horaInicio): void

  {

    $this->horaInicio = $horaInicio;

  }
 
  public function getHoraFim(): ?string

  {

    return $this->horaFim;

  }

  public function setHoraFim(?string $horaFim): void

  {

    $this->horaFim = $horaFim;

  }

}
 
