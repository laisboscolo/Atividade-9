<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $grupo = $_POST['grupo']; // Recebe o nome
    $musica = $_POST['musica']; // Recebe o ano de lançamento
    $sql = "INSERT INTO cadastro (grupo, musica) VALUES ('$grupo', '$musica')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}



?>