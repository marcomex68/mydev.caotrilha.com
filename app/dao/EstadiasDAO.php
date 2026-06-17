<?php

require_once __DIR__ . "/../config/DatabaseSingle.php";

class EstadiasDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = DatabaseSingle::connect();
    }

    public function listarEstadias() {
        $sql = "SELECT id FROM estadias";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function detalheEstadia($estadiaId) {
        $sql = "SELECT id, data_entrada, data_saida, preco_total FROM estadias WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $estadiaId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}