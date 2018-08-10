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
	<div id="pageAnimais">
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


		<h2>Lista de Unidades</h2><br>


	<table border="1px">
		<tr>
			<th>Número da Ficha</th>
			<th>Data de Recebimento</th>
			<th>Agente</th>
			<th>Tipo de Recolhimento</th>
			<th>Nome do Entregador</th>
			<th>CPF/CNPJ</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>Município</th>
			<th>CEP</th>
			<th>ID Documento</th>
			<th>ID Unidade</th>
			<th>Município de Procedência</th>
			<th>UF</th>
			<th>Última Procedência</th>
			<th>Dieta</th>
			<th>Nome Comum</th>
			<th>Nome Científico</th>
			<th>Família</th>
			<th>Ordem</th>
			<th>Código da Marcação</th>
			<th>Tipo de Marcação</th>
			<th>Local da Marcação</th>
			<th>Período em Quarentena</th>
			<th>Tipo da Destinação</th>
			<th>Subtipo da Destinação</th>
			<th>Condição 1</th>
			<th>Condição 2</th>
			<th>Condição 3</th>
			<th>ID Área</th>
		</tr>

	</table>
</div>
</div>
</div>

</body>
</html>
