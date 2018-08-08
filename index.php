<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  session_start();   // Sessão validação usuario
  include 'validarlogin.inc.php';
?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
  <title>Login Sistema Jaguar</title>
</head>
<body>

  <form id="loginform" method="post" action="">
    <div class="logo">
      <img src="img/logo.png" alt="Logo" id="logo">
		  <h2>Login</h2>
    </div>

  	<label><b>Matricula:</b></label>
  	<input type="text" placeholder="Insira sua Matricula da Empresa" name="matricula" id="usuario" required autofocus>
  	
    <label><b>Senha:</b></label>
  	<input type="password" name="senha" placeholder="Digite sua senha" required>
  	
    <button type="submit">Entrar</button>
  	<input type="hidden" name="entrar" value="login">

  	<button type="reset" value="Limpar" class="cancelar">Inserir Novo</button>
  	<span class="esqueceu"><a href="recuperar_Senha.php">Solicitar Recuperação de Senha?</a></span>

    <a href="ajuda.php" target="_blank">Ajuda</a>
  </form>
  
  <footer></footer>

</body>
</html>
