<?php

require_once __DIR__ . "/../config/DatabaseSingle.php";

class CaesDAO
{

 private PDO $conn;

  public function __construct()
  {
    $this->conn = DatabaseSingle::connect();
  }


  public function listarCaesDono(int $donoId): array
  {
    $sql = "
        SELECT id, id_user, nome, raca, idade, estado, peso, sexo, esterilizado
        FROM caes
        WHERE id_user = ?
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$donoId]);

    $caes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $caes;
  }

  public function createCao(array $data, int $donoId): void
  {
    $sql = "
        INSERT INTO caes (id_user, nome, raca, idade, estado, peso, sexo, esterilizado)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        $donoId,
        $data['nome'],
        $data['raca'],
        $data['idade'],
        $data['estado'],
        $data['peso'],
        $data['sexo'],
        $data['esterilizado']
    ]);
  }

  public function detalheCao(int $userId, int $caoId): ?array
    {
      $sql = "
        SELECT id, id_user, nome, raca, idade, estado, peso, sexo, esterilizado
        FROM caes
        WHERE id = ? AND id_user = ?
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$caoId, $userId]);

    $cao = $stmt->fetch(PDO::FETCH_ASSOC);

    return $cao ?: null;
  }
}

