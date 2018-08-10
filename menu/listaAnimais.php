<?php
  //Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  //include '../verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf8mb4_unicode_ci">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../style/bootstrapv3.min.css">
	<title>Cadastro de Unidades</title>
</head>

<body>
	<div id="pageListaAnimais">
		<div class="container-fluid">

			<dir class="logo_admin">
				 <img src="../img/logo.png">
			</dir>
			<dir class="logout">
				<a href="../areaadm.php"> <input class="btn btn-default" type="button" name="btn" value="Voltar"></a>
				<a  class="btn btn-default" href="../logout.php">Logout</a>
			</dir>
			<div >
				<div class="">
				<!-- Menu -->
				<?php include '../menu/menuAdm.php'; ?>
				<!-- Fim Menu -->
			</div><br><br>

		<div class="container">

		<h2>Lista de Animais</h2><br>
  	<table border="1px">
  		<tr>
  			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Animal X</th>
  			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Animal Y</th>
  			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Animal Z</th>
        </tr>

  	</table>
  </div>
  </div>
</div>
</div>

</body>
</html>
