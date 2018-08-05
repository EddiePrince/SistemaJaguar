<?php
  include 'conexao.inc.php';
  session_start();   // Sessão validação usuario
  include 'validarlogin.inc.php';
?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
  <title>Login Sistema Jaguar</title>
</head>
<body>

    <form method="post" action="">

    	<div class="formtop">
 			<img src="img/logo.png" alt="Logo" id="logo">
    		<h2>Login</h2>   		
    	</div>
 
      	<label for="name"><b>Usuário:</b></label>
      	<input type="text" placeholder="Insira sua Matricula da Empresa" name="usuario" id="usuario" required autofocus>

      	<label for="senha"><b>Senha:</b></label>
      	<input type="password"  id="senha"  name="senha" placeholder="Digite sua senha" required>
      	<button type="submit">Entrar</button>
      	<input type="hidden" name="entrar" value="login">
      	<label>
        <input type="checkbox" checked="checked" name="remember">Lembre de mim.
      	</label>


      	<button type="reset" value="Limpar" class="cancelar">Inserir Novo</button>
      	<span class="esqueceu"><a href="recuperar_Senha.php">Solicitar Recuperação de Senha?</a></span>

    </form>

	<footer></footer>



</body>
</html>
