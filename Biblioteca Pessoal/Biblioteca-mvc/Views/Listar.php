<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Pessoal</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>📚 Biblioteca Pessoal</h1>
        
        <a href="index.php?acao=criar" class="btn btn-create">Adicionar Novo Livro</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><?php echo $row['autor']; ?></td>
                    <td><?php echo $row['ano']; ?></td>
                    <td>
                        <a href="index.php?acao=editar&id=<?php echo $row['id']; ?>" class="btn btn-edit">Editar</a>
                        <a href="index.php?acao=excluir&id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Tem a certeza que deseja excluir?');">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>