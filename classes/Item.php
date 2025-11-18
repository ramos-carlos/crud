<?php
class Item {

    private $conn;
    private $table = "itens";

    public $id;
    public $nome;
    public $descricao;
    public $preco;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Listar
    public function read() {
        $query = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Cadastro
    public function create() {
        $query = "INSERT INTO {$this->table} (nome, descricao, preco) VALUES (:nome, :descricao, :preco)";
        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            ":nome" => $this->nome,
            ":descricao" => $this->descricao,
            ":preco" => $this->preco
        ]);
    }

    // Buscar item por ID
    public function find($id) {
        $query = "SELECT * FROM {$this->table} WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);

        $stmt->execute([":id" => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Atualizar
    public function update() {
        $query = "UPDATE {$this->table} 
                  SET nome = :nome, descricao = :descricao, preco = :preco 
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            ":nome" => $this->nome,
            ":descricao" => $this->descricao,
            ":preco" => $this->preco,
            ":id" => $this->id
        ]);
    }

    // Deletar
    public function delete($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([":id" => $id]);
    }
}
