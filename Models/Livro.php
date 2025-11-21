<?php
class Livro {
    var $conn;
    var $table_name = "livros";

    var $id;
    var $titulo;
    var $autor;
    var $ano;

    function __construct($db) {
        $this->conn = $db;
    }

    // Ler todos
    function ler() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Criar
    function criar() {
        $query = "INSERT INTO " . $this->table_name . " SET titulo=:titulo, autor=:autor, ano=:ano";
        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->autor = htmlspecialchars(strip_tags($this->autor));
        $this->ano = htmlspecialchars(strip_tags($this->ano));

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":autor", $this->autor);
        $stmt->bindParam(":ano", $this->ano);

        return $stmt->execute();
    }

    function lerUm() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->titulo = $row['titulo'];
        $this->autor = $row['autor'];
        $this->ano = $row['ano'];
    }

    // Atualizar
    function atualizar() {
        $query = "UPDATE " . $this->table_name . " SET titulo = :titulo, autor = :autor, ano = :ano WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->autor = htmlspecialchars(strip_tags($this->autor));
        $this->ano = htmlspecialchars(strip_tags($this->ano));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':ano', $this->ano);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }

    //Excluir
    function excluir() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        return $stmt->execute();
    }
}
?>