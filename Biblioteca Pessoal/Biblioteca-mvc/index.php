<?php
// Carregar Controlador
include_once 'controllers/LivroController.php';

$controller = new LivroController();

// Roteamento simples (Router)
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($acao == 'criar') {
    $controller->criar();
} elseif ($acao == 'editar' && $id) {
    $controller->editar($id);
} elseif ($acao == 'excluir' && $id) {
    $controller->excluir($id);
} else {
    $controller->index();
}
?>