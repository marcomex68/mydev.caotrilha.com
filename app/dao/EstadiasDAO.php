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
        $sql = "SELECT * FROM estadias";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}