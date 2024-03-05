<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <!-- FAVICON -->
  <link rel="icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
  <!-- CSS DA PÁGINA -->
  <link rel="stylesheet" type="text/css" href="../assets/css/page_register.css">

</head>

<body>
  <div class="container">
    <div class="sidebar">
      <form id="registrationForm" method="post" action="../config/insert_register.php">
        <h2>Cadastro</h2>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo">
          <option value="Financeiro">Financeiro</option>
          <option value="Gerência">Gerência</option>
          <option value="ADM">ADM</option>
          <option value="Operacional">Operacional</option>
        </select>
        <input type="submit" value="Registrar">
      </form>
      <!-- Link para a página de login -->
      <a href="index.php">Voltar para o Login</a>
    </div>
    <div class="content">
      <img src="../assets/img/amoedo_logo.png" alt="Logo da Empresa" class="logo">
    </div>
  </div>
</body>

</html>
