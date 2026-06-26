<?php

class Cao
{
    private int $id;
    private int $id_user;
    private ?int $id_trilha;
    private ?int $id_estadia;

    private string $nome;
    private string $raca;
    private int $idade;
    private float $peso;
    private string $sexo;
    private string $dono_nome;
    private bool $esterilizado;

    private ?string $trilha_nome;
    private ?int $estadia_id;

    public function __construct(
        int $id,
        int $id_user,
        ?int $id_trilha,
        ?int $id_estadia,
        string $nome,
        string $raca,
        int $idade,
        float $peso,
        string $sexo,
        string $dono_nome,
        bool $esterilizado,
        ?string $trilha_nome = null,
        ?int $estadia_id = null
    ) {
        $this->id = $id;
        $this->id_user = $id_user;
        $this->id_trilha = $id_trilha;
        $this->id_estadia = $id_estadia;
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->sexo = $sexo;
        $this->dono_nome = $dono_nome;
        $this->esterilizado = $esterilizado;
        $this->trilha_nome = $trilha_nome;
        $this->estadia_id = $estadia_id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getIdTrilha(): ?int
    {
        return $this->id_trilha;
    }

    public function setIdTrilha(?int $id_trilha): void
    {
        $this->id_trilha = $id_trilha;
    }

    public function getIdEstadia(): ?int
    {
        return $this->id_estadia;
    }

    public function setIdEstadia(?int $id_estadia): void
    {
        $this->id_estadia = $id_estadia;
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

    public function getDonoNome(): string
    {
        return $this->dono_nome;
    }

    public function setDonoNome(string $dono_nome): void
    {
        $this->dono_nome = $dono_nome;
    }

    public function getEsterilizado(): bool
    {
        return $this->esterilizado;
    }

    public function setEsterilizado(bool $esterilizado): void
    {
        $this->esterilizado = $esterilizado;
    }

    public function getTrilhaNome(): ?string
    {
        return $this->trilha_nome;
    }

    public function setTrilhaNome(?string $trilha_nome): void
    {
        $this->trilha_nome = $trilha_nome;
    }

    public function getEstadiaId(): ?int
    {
        return $this->estadia_id;
    }

    public function setEstadiaId(?int $estadia_id): void
    {
        $this->estadia_id = $estadia_id;
    }
}