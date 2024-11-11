<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud Grupos musicais</title>
</head>
<body>
<h1>Gerenciamento Musica</h1>
    <form action="store.php" method="POST">
        <label>Nome do Grupo:</label>
        <input type="text" name="grupo" required>
        <label>Nome da Musica:</label>
        <input type="text" name="musica" required>
        <br>
        <input class="botao"  type="submit" value="Adicionar a playlist">

    </form>
    <hr>
    <h2>Lista de Grupos e musicas</h2>

    <div>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>