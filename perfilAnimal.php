<?php
	include 'post_cadastro_animais.php';
	include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf8mb4_unicode_ci">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Perfil de Animais</title>
	</head>

	<body>
    <div id="pagePerfilAnimal">
			<div class="container-fluid">
				<dir class="logo_admin">
					<img src="img/logo.png">
				</dir>
				<dir class="logout">
					<a class="btn btn-default" href="logout.php">Logout</a>
				</dir>
				<div class="">
					<!-- Menu -->
					<?php include 'menu/menuAdm.php'; ?>
				</div><br><br>

        <h1>Perfil Do Animal</h1>

    		<div class="container">

    		<h2>Lista de Animais</h2><br>
      	<table border="1px">
      		<tr>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Número da Ficha</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Data de Recebimento</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Agente</th>
            </tr>
        </table>
        <table border="1px">
          <tr>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Tipo de Recolhimento</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Nome do Entregador</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>CPF/CNPJ</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Telefone</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>UF</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Município</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>CEP</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Bairro</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Lote</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Complemento</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Tipo Documento</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Numero Documento</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Upload</th>
          </tr>
        </table>
        <table border="1px">
          <tr>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Tipo Unidade</th>
          </tr>
        </table>
        <table border="1px">
          <tr>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Última Procedência</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Dieta</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Nome Comum</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Nome Científico</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Família</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Ordem</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Código da Marcação</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Tipo de Marcação</th>
            <th><a href="perfilAnimal.php">Ver Perfil</a><br>Local da Marcação</th>
          </tr>
        </table>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Município de Procedência</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>UF</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Período em Quarentena</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Tipo da Destinação</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Subtipo da Destinação</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Condição 1</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Condição 2</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>Condição 3</th>
      			<th><a href="perfilAnimal.php">Ver Perfil</a><br>ID Área</th>
      		</tr>

      	</table>
      </div>


			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


	</body>

</html>
