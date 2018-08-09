<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  session_start();   // Sessão validação usuario
  include 'validarlogin.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
  <title>Login Sistema Jaguar</title>
</head>
<body>

 <div id="maincontainer">

  <img src="img/logo.png" alt="Logo" id="logo">

  <div id="formcontainer">

    <form id="loginform" method="post" action="">

        <div id="logintitle">
         <h2>Login</h2>
        </div>

        <label>Usuário:</label><br>
        <input type="text"  name="matricula" id="usuario" required autofocus><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required>

        <hr>

        <button type="submit">Login</button>
        <input type="hidden" name="entrar" value="login">

        <span class="esqueceu"><a href="recuperar_Senha.php">Solicitar Recuperação de Senha?</a></span>

        <a href="ajuda.php" target="_blank">Ajuda</a>

    </form>

  </div>

</body>
</html>
