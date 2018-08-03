<?php 
	include 'includes/conexao.php';
	include 'includes/verificarlogado.inc.php';
 ?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/editar_usuario.css">
	<title>Editar Usuário</title>
</head>
<body>
		<div class="imgcontainer">
	   <a href="editar_usuario.php"> <img src="image/logo_5.png" alt="logo" class="logo"></a>
	  </div>
		<h2>Editar Usuário</h2>
	<div id="wrapper">
	<div class="form_div">
	<form action="">

	    <label for="name"><p>Nome Completo:</label>
	    <input type="text" placeholder="Insira Nome Completo" name="name" autofocus>

	     <label for="usuario"><p>Usuário:</p></label>
	    <input type="text" placeholder="Matricula da Empresa" name="usuario" >

			<label for="email"><p>E-mail:</p></label>
			<input class="usuario" type="text" name="email" placeholder="E-mail" size="35" maxlength="100">

			<label for="senha"><p>Senha:</p></label>
	    <input type="text" placeholder="Atualize a Senha" name="senha" >
	    <button type="submit">Confirmar Alteração</button>
	    </div>
	    </div>
	  </div>
	</form>
	<footer></footer>
</body>
</html>
