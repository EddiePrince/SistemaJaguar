<!DOCTYPE html>
<html lang="pt_br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro Ususuaro</title>
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<!-- <img src="img/Logo.png" alt="Logo" class="logo"> -->
				<br><br><br><form method="post" action="post_cadastro_usuario.php">
					<h1>Cadastro Usuario</h1>
							<br>
								<label>Perfil: </label><br>
								<select name="perfil" required autofocus>
									<option>Selecione o Perfil do Usuário</option>
									<option value="Administrador">Administrador</option>
									<option value="Agente">Agente</option>
								</select><br><br><br>

					      <label>Matricula:</label><br>
					      <input type="text" placeholder="inserir a Matrícula" name="matricula" required><br><br>

						    <label>Nome:</label><br>
						    <input type="text" placeholder="Insira o Nome Completo" name="nome" required><br><br>

								<label>E-mail:</label><br>
								<input class="usuario" type="text" name="email" placeholder="E-mail do Usuario" size="35" maxlength="100"  required><br><br>

						    <label>Telefone Residencial:</label><br>
						    <input type="text" placeholder="Digite o N° Telefone" name="telefone" required><br><br>

						    <label>Celular:</label><br>
						    <input type="text" placeholder="Digite o N° Celular" name="celular" required><br><br>

								<label>Senha:</label><br>
						    <input type="text" placeholder="Digite uma senha" name="senha" required><br><br>

						    <button type="submit">Cadastrar</button><br><br><br><br>

							</form>
							<div>
								<a href="areaadm.php"> <input type="button" name="btn" value="Voltar">  </a>
							</div><br><br>
						</div>

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>

	</body>
</html>
