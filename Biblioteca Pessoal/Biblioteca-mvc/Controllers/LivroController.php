<?php
include_once 'config/database.php';
include_once 'models/Livro.php';

class LivroController {
    var $db;
    var $livro;

    function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->livro = new Livro($this->db);
    }

    function index() {
        $stmt = $this->livro->ler();
        include 'views/listar.php';
    }

    function criar() {
        if ($_POST) {
            $this->livro->titulo = $_POST['titulo'];
            $this->livro->autor = $_POST['autor'];
            $this->livro->ano = $_POST['ano'];
            
            if ($this->livro->criar()) {
                header("Location: index.php");
            } else {
                echo "Erro ao criar livro.";
            }
        }

        include 'views/formulario.php';
    }

    function editar($id) {
        $this->livro->id = $id;
        $this->livro->lerUm();

        if ($_POST) {
            $this->livro->titulo = $_POST['titulo'];
            $this->livro->autor = $_POST['autor'];
            $this->livro->ano = $_POST['ano'];
            
            if ($this->livro->atualizar()) {
                header("Location: index.php");
            }
        }
        $livro_atual = $this->livro; 
        include 'views/formulario.php';
    }

    function excluir($id) {
        $this->livro->id = $id;
        if ($this->livro->excluir()) {
            header("Location: index.php");
        } else {
            echo "Erro ao excluir.";
        }
    }
}
?>