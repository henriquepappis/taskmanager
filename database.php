<?php
function getDatabaseConnection()
{
    $servername = "host";
    $username = "username";
    $password = "password";
    $dbname = "task_manager";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    return $conn;
}
