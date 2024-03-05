<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <!-- FAVICON -->
  <link rel="icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
  <!-- CSS DA PÁGINA -->
  <link rel="stylesheet" type="text/css" href="../assets/css/page_index.css">
</head>

<body>
  <div class="wrapper fadeInDown">
    <div class="content-login">
      <!-- Inserir a imagem da logo aqui -->
      <img src="../assets/img/amoedo_altlogo.png" alt="Logo da Empresa" class="logo" />
      <h2 class="active">Login</h2>
      <form class="box-login" method="post" action="insert_register.php">
        <input type="text" id="usuario" class="campo" name="usuario" placeholder="Usuário" />
        <input type="password" id="senha" class="campo" name="senha" placeholder="Senha" />
        <input type="submit" class="botao" value="Entrar" />
      </form>
      <a href="register.php" class="link">Não possui uma conta? Cadastre-se</a>
    </div>
  </div>
</body>

</html>