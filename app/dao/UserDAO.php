<?php


require_once __DIR__ . '/../config/DataBase.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Cao.php';
require_once __DIR__ . '/../models/Trilhas.php';
require_once __DIR__ . '/../models/Estadia.php';

class UserDAO
{
    private $conn;

    public function __construct()
    {
        // Conectar á base de dados
        $this->conn = (new DataBase())->connect();
    }

    public function findByEmail(string $email): ?User
    {
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

    public function findById(string $id): ?Cao
    {
        $sql = "SELECT * FROM caes WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Cao(
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

        return null;
    }

    public function getUsers(): array
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($rows as $row) {
            $users[] = new User(
                (int)$row['id'],
                (bool)$row['is_admin'],
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

    public function getEstadias(): array
    {
        $sql = "SELECT * FROM estadias";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $estadias = [];
        foreach ($rows as $row) {
            $estadias[] = new Estadia(
                $row['id'],
                $row['data_entrada'],
                $row['data_saida'],
                $row['preco_total'],
                $row['pago']
            );
        }

        return $estadias;
    }

    public function getUsersCount(): int
    {
        $sql = "SELECT COUNT(*) FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return (int) $stmt->fetchColumn();
    }

    public function getCaesCount(): int
    {
        $sql = "SELECT COUNT(*) FROM caes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return (int) $stmt->fetchColumn();
    }

    public function getTrilhasCount(): int
    {
        $sql = "SELECT COUNT(*) FROM trilhas";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return (int) $stmt->fetchColumn();
    }

    public function getEstadiasCount(): int
    {
        $sql = "SELECT COUNT(*) FROM estadias";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return (int) $stmt->fetchColumn();
    }

   public function delete(int $id): void
{
    // apagar cães do utilizador
    $sqlCaes = "DELETE FROM caes WHERE id_user = :id";

    $stmtCaes = $this->conn->prepare($sqlCaes);

    $stmtCaes->bindParam(':id', $id, PDO::PARAM_INT);

    $stmtCaes->execute();


    // apagar utilizador
    $sqlUser = "DELETE FROM users WHERE id = :id";

    $stmtUser = $this->conn->prepare($sqlUser);

    $stmtUser->bindParam(':id', $id, PDO::PARAM_INT);

    $stmtUser->execute();
}

    public function findByTrilhaNome(string $nome): ?Trilha
    {
        $sql = "SELECT * FROM trilhas WHERE nome = :nome LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Trilha(
                $row['id'],
                $row['nome'],
                $row['data'],
                $row['kms'],
                $row['localidade']
            );
        }

        return null;
    }

     public function createTrilha(string $nome, string $data, float $kms, string $localidade): void
    {
        $sql = "INSERT INTO trilhas (nome, data, kms, localidade) VALUES (:nome, :data, :kms, :localidade)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':kms', $kms);
        $stmt->bindParam(':localidade', $localidade);
        $stmt->execute();
}


}