<?php

    $servername = "127.0.0.1";
    $username ="root";
    $password ="";
    $dbname ="grupos_musicais";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){

    echo " Erro de conexão " . $conn->connect_error;

} else {
    echo "";
}

?>