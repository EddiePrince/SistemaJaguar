<?php include 'conexao.php';
   //Inicio do codigo validação usuario
  session_start();

//  $senha = $_SESSION['senha'];
  $usuario = $_SESSION['usuario'];

  if (!isset($_SESSION['nomeCompleto']) && !isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
  }
?>
    <!-- Fim do codigo validação usuario -->

<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/Estilo_Cadastro.css">
	<title>Cadastro</title>
</head>
<body>
	<div id="wrapper">

		<dir class="#">
		    <nav class="#">
		        <ul class="#">
		            <li><a href="#">Ajuda</a></li>
		        </ul>
		    </nav>
		</dir>

		<h2>Cadastro de Usuário</h2>
		<div class="form_div">
		<div class="imgcontainer">
	   <a href="index.php"> <img src="image/Logo_4.png" alt="Logo" class="logo"></a>
	  </div>

		<form method="post" action="post_cadastro_usuario.php">

			<p>Perfil:</p>
			<select name="perfil" required>
				<option>Selecione o Perfil do Usuário</option>
				<option value="Administrador">Administrador</option>
				<option value="Agente">Agente</option>
			</select><br><br><br>

	    <label for="name"><p>Nome:</p></label>
	    <input type="text" placeholder="Insira o Nome Completo" name="nomeCompleto" required autofocus><br><br>

			<label for="email"><p>E-mail:</p></label>
			<input class="usuario" type="text" name="email" placeholder="E-mail do Usuario" size="35" maxlength="100"  required><br><br>

	    <label for="telRes"><p>Telefone Residencial:</p></label>
	    <input type="text" placeholder="Digite o N° Telefone" name="telefone" required><br><br>

	    <label for="telCel"><p>Celular:</p></label>
	    <input type="text" placeholder="Digite o N° Celular" name="celular" required><br><br>

			<label for="usuario"><p>Usuário:</p></label>
			<input type="text" placeholder="N° da Matrícula" name="usuario" required><br><br>

			<label for="senha"><p>Senha:</p></label>
	    <input type="text" placeholder="Digite uma senha" name="senha" required><br><br>

	    <button type="submit">Cadastrar</button><br><br>
		</form>
	    </div>
	    </div>
	  </div><br><br>
	<div>
	 <a href="index.php"> <input type="button" name="btn" value="Voltar">  </a>
	</div><br><br>
	<footer></footer>
</body>
</html>
