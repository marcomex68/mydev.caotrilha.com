<?php

 
require_once __DIR__ . '/../config/DataBase.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Cao.php';
require_once __DIR__ . '/../models/Trilhas.php';
require_once __DIR__ . '/../models/Estadia.php';
 
class UserDAO {
    private $conn;
 
    public function __construct() {
        // Conectar á base de dados
        $this->conn = (new DataBase())->connect();
    }
 
    public function findByEmail(string $email): ?User {
    $sql = "SELECT * FROM users WHERE email = :email AND is_admin = 1 LIMIT 1";

    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if ($row) {
            return new User(
                $row['id'],
                $row['is_admin'],
                $row['nome'],
                $row['telefone'],
                $row['email'],
                $row['morada'],
                $row['password']
            );
        }
 
        return null;
    }

    public function getUsers(): array {
        $sql = "SELECT * FROM users WHERE is_admin = 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
        $users = [];
        foreach ($rows as $row) {
            $users[] = new User(
                $row['id'],
                $row['is_admin'],
                $row['nome'],
                $row['telefone'],
                $row['email'],
                $row['morada'],
                $row['password']
            );
        }
 
        return $users;
}

public function getCaes(): array
{
    $sql = "
    SELECT 
        caes.*,
        users.nome AS dono_nome,
        trilhas.nome AS trilha_nome,
        estadias.id AS estadia_id
    FROM caes
    INNER JOIN users ON caes.id_user = users.id
    INNER JOIN trilhas ON caes.id_trilha = trilhas.id
    INNER JOIN estadias ON caes.id_estadia = estadias.id
";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $caes = [];

    foreach ($rows as $row) {
        $caes[] = new Cao(
            $row['id'],
            $row['id_user'],
            $row['id_trilha'],
            $row['id_estadia'],
            $row['nome'],
            $row['raca'],
            $row['idade'],
            $row['peso'],
            $row['sexo'],
            $row['dono_nome'],
            $row['esterilizado'],
            $row['trilha_nome'],
            $row['estadia_id']
        );
    }

    return $caes;
}

public function getTrilhas(): array
{
    $sql = "SELECT * FROM trilhas";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $trilhas = [];
    foreach ($rows as $row) {
        $trilhas[] = new Trilha(
            $row['id'],
            $row['nome'],
            $row['data'],
            $row['kms'],
            $row['localidade']
        );
    }

    return $trilhas;
}
}