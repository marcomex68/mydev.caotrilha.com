<?php

require_once __DIR__ . "/../config/DatabaseSingle.php";
require_once __DIR__ . "/../models/Trilhas.php";

class TrilhaDAO
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = DatabaseSingle::connect();
    }

    public function listarTrilhas(): array
    {
        $sql = "SELECT id, nome, kms, localidade FROM trilhas";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return array_map(fn($r) => new Trilha($r['id'], $r['nome'], (float)$r['kms'], $r['localidade']), $rows);
    }

    public function findByNome(string $nome): ?array
    {
        $sql = "SELECT * FROM trilhas WHERE nome = ? LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$nome]);

        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res ?: null;
    }

    public function createTrilha(Trilha $trilha): void
    {
        $sql = "INSERT INTO trilhas (nome, kms, localidade) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $trilha->getNome(),
            $trilha->getKms(),
            $trilha->getLocalidade()
        ]);
    }

    public function detalheTrilha(int $id): ?array
    {
        $sql = "SELECT id, nome, kms, localidade FROM trilhas WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res ?: null;
    }
}