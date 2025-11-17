<?php

class Database {
    private $host = "127.0.0.1";
    private $port = "3307";
    private $db   = "crud";
    private $user = "root";
    private $pass = "";
    private $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->db};charset=utf8",
                $this->user,
                $this->pass
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;

        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            exit;
        }
    }
}
