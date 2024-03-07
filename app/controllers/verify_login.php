<?php
session_start();

// Estabelecer conexão com o banco de dados
include_once '../models/config.php'; // Substitua por seu arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    // Consulta para verificar as credenciais usando prepared statements
    $stmt = $conn->prepare("SELECT * FROM user WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Credenciais corretas: definir as informações do usuário na sessão e redirecionar para a página de sucesso
            $_SESSION['id'] = $row['id']; // Armazenar o ID do usuário na sessão
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nome'] = $row['nome']; // Armazenar o nome do usuário na sessão
            $_SESSION['codigo_adm'] = $row['codigo_adm']; // Armazenar o código de administrador na sessão
            $_SESSION['logged_in'] = true; // Flag de login para indicar que o usuário está autenticado
            $_SESSION['cargo'] = $row['cargo'];
            // Insira detalhes do login na tabela log_login
            $usuario_id = $row['id'];
            $nome_usuario = $row['nome'];
            $acao = "Usuario Logado"; // Ação para registrar o login do usuário
            $sql_log = "INSERT INTO logs (usuario, log_data, acao) VALUES (?, ?, ?)";
            $stmt_log = $conn->prepare($sql_log);
            $stmt_log->bind_param("iss", $usuario, $log_data, $acao);
            $stmt_log->execute();

            header('Location: ../app/views/user/home.php'); // Redirecionar para a página de sucesso
            exit();
        } else {
            // Credenciais incorretas
            header('Location: ../erro/login_erro.php?error=credenciais_incorretas'); // Redirecionar para a página de login com feedback de erro
            exit();
        }
    } else {
        // Usuário não encontrado
        header('Location: ../erro/login_erro.php?error=usuario_nao_encontrado'); // Redirecionar para a página de login com feedback de erro
        exit();
    }
} else {
    // Redirecionar se o método de requisição não for POST
    header('Location: ../app/views/user/home.php'); // Redirecionar de volta para a página de login
    exit();
}

?>