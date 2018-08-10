<?php
  //Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="br-pt">

<head>
  <meta charset="utf8mb4_unicode_ci">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
	<title>Cadastro de Unidades</title>
</head>

<body>
  	<div id="pageUnidade">
	    <div class="container-fluid">

	      <dir class="logo_admin">
           <img src="img/logo.png">
	      </dir>
				<dir class="logout">
					<a href="areaadm.php"> <input class="btn btn-default" type="button" name="btn" value="Voltar"></a>
					<a  class="btn btn-default" href="logout.php">Logout</a>
				</dir>
	      <div >
					<div class="">
	        <!-- Menu -->
	        <?php include 'menu/menuAdm.php'; ?>
	        <!-- Fim Menu -->
	      </div><br><br>


			<h2>Cadastro de Unidades</h2><br>
			<form method="post" action="post_cadastro_unidades.php"><br>

				<label>Nome Da Unidade:</label><br>
				<input class="form-control" type="text" name="nome" required autofocus><br>

        <label>CNPJ:</label><br>
        <input class="form-control" type="text" name="cnpj" required><br>

				<label>Tipo da Unidade:</label><br>
				<select class="form-control" name="tipoUnidade">
          <option>Selecione o Tipo da Unidade</option>
          <option>Central</option>
          <option>Regional</option>
        </select><br><br>

				<button class="btn btn-default" type="submit">Cadastrar</button>
			</form>
		</div>
	</div>
	</div>

</body>

</html>
