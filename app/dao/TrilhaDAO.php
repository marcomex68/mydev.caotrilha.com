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
}