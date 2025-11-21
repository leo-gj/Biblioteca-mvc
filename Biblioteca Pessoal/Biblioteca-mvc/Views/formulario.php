<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Livro</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo isset($livro_atual) ? '✏️ Editar Livro' : '➕ Novo Livro'; ?></h1>
        
        <form action="" method="POST">
            <label for="titulo">Título do Livro:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo isset($livro_atual->titulo) ? $livro_atual->titulo : ''; ?>" required placeholder="Ex: Dom Quixote">
            
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="<?php echo isset($livro_atual->autor) ? $livro_atual->autor : ''; ?>" required placeholder="Ex: Miguel de Cervantes">
            
            <label for="ano">Ano de Publicação:</label>
            <input type="number" id="ano" name="ano" value="<?php echo isset($livro_atual->ano) ? $livro_atual->ano : ''; ?>" required placeholder="Ex: 1605">
            
            <button type="submit" class="btn btn-save">Salvar Dados</button>
        </form>
        
        <a href="index.php" class="btn btn-back">Voltar</a>
    </div>
</body>
</html>