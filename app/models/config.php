<?php
// Conexão com o banco de dados 
$servername = "127.0.0.1";
$username = "root";
$password = "root123";
$dbname = "amoedo_sge";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>