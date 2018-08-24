<?php
  //Erro de Validação W3C Identificado
  //Conecção com Banco
  include 'conexao.inc.php';
  session_start();   // Sessão validação usuario
  include 'validarlogin.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login Sistema Jaguar</title>
</head>
<body class="body">

<div class="contact-form">
		<img src="img/logo.png" alt="Logo" class="avatar">
		<!-- <h2>login</h2> --><br><br>
		<form method="post">

				<p>Usuario</p>
				<input type="text" name="matricula"  id="usuario"  placeholder="Matricula" required autofocus>
				<p>Senha</p>
				<input type="password" name="senha" placeholder="Senha" required >
			 	<input class="postlogin" type="submit" name="entrar" value="Login">
        <!--<a href="ajudaLogin.php" target="_blank"><img class="icon-img" alt="Ajuda" src="img/icon1.png"></a>-->
		</form>
</div>

</body>
</html>
