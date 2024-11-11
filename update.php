<link rel="stylesheet" href="update.css">
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM cadastro WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $grupos = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grupo = $_POST['grupo']; // Recebe o novo nome
    $musica = $_POST['musica']; // Recebe o novo email
    $sql = "UPDATE cadastro SET grupo='$grupo', musica='$musica' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Grupos</title>
</head>
<body>
    <h1>Atualizar Grupos</h1>
    <form action="" method="POST">
        <label>nome do grupo:</label>
        <input type="text" name="grupo" value="<?php echo $grupos['grupo']; ?>" required>
        <label>musica:</label>
        <input type="musica" name="musica" value="<?php echo $grupos['musica']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>