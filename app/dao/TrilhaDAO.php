<?php

require_once __DIR__ . "/../config/DatabaseSingle.php";

class TrilhaDAO
{

  private PDO $conn;

  public function __construct()
  {
    $this->conn = DatabaseSingle::connect();
  }


  public function listarTrilhasDono(int $donoId): array
  {
    $sql = "
        SELECT id, nome, kms, localidade
        FROM trilhas
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    $trilhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $trilhas;
  }

  public function createTrilha(Trilha $trilha, int $donoId): void
  {
    $sql = "
        INSERT INTO trilhas (id_user, nome, kms, localidade)
        VALUES (?, ?, ?, ?)
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      $donoId,
      $trilha->getNome(),
      $trilha->getKms(),
      $trilha->getLocalidade()
    ]);
  }

  public function detalheTrilha(int $trilhaId): ?array
  {
    $sql = "
        SELECT id, nome, kms, localidade
        FROM trilhas
        WHERE id = ?
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$trilhaId]);

    $trilha = $stmt->fetch(PDO::FETCH_ASSOC);

    return $trilha ?: null;
  }
}