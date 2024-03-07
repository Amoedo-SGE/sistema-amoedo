<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once '../models/config.php';

    // Prepara os dados do formulário para inserção no banco de dados
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cargo = $_POST["cargo"];

    // Prepara e executa a query SQL para inserir os dados na tabela de usuários
    $sql = "INSERT INTO user (nome, usuario, cargo) VALUES ('$username', '$password', '$cargo')";

    if ($conn->query($sql) === TRUE) {
        // Armazena os dados do formulário na sessão
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['cargo'] = $cargo;
        
        // Insere o registro na tabela de logs
        $acao = "Usuario Cadastrado";
        $sql_log = "INSERT INTO logs (usuario, log_data, acao) VALUES ('$username', NOW(), '$acao')";
        
        if ($conn->query($sql_log) === TRUE) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro ao inserir registro de log: " . $conn->error;
        }
    } else {
        echo "Erro ao registrar o usuário: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
