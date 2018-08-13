<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf8mb4_unicode_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Usuário</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
</head>

<body>

	<div id="pageUsuario">
	    <div class="container-fluid">

	      <div class="logo_admin">
        <img src="img/logo.png">
      </div>


			<div id="cadusuario">
        <form class="corpoAdm" method="post" action="post_cadastro_usuario.php">
        <div>
          <!-- Menu -->
          <?php include 'menuAdm.php'; ?>
          <!-- Fim Menu -->
        </div>

			<h3>Cadastro Usuario</h3>
			<label>Perfil: </label><br>
			<select class="form-control" name="perfil" required autofocus>
				<option>Selecione o Perfil do Usuário</option>
				<option value="Administrador">Administrador</option>
				<option value="Agente">Agente</option>
			</select><br><br>

	      	<label>Matricula:</label><br>
	      	<input class="form-control" type="text" name="matricula" required><br><br>

		    <label>Nome:</label><br>
		    <input class="form-control" type="text" name="nome" required><br><br>

			<label>E-mail:</label><br>
			<input class="form-control" class="usuario" type="text" name="email" size="35" maxlength="100"  required><br><br>

		    <label>Telefone Residencial:</label><br>
		    <input class="form-control" type="text" name="telefone" required><br><br>

		    <label>Celular:</label><br>
		    <input class="form-control" type="text" name="celular" required><br><br>

			<label>Senha:</label><br>
		    <input class="form-control" type="text" name="senha" required><br><br>

		    <button class="btn btn-default" type="submit">Cadastrar</button><br><br><br><br>

		</form>


	<!-- </div> -->
</div>
<div class="footer">
  <?php include 'footer.php'; ?>
</div>
</div>
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
