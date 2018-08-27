<?php
	//Erro de Validação W3C Identificado
  //Conexão com Banco
	include 'post_cadastro_animais.php';
	include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Perfil de Animais</title>
	</head>

	<body>
    <div id="pagePerfilAnimal">
				<div class="logo_admin">
					<img src="img/logo.png" alt="Logo"> <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
				</div>

				<div class="corpoAdm">
					<!-- Menu -->
					<!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>


        <h1>Perfil Do Animal</h1>

    		<div class="container">


      	<table>
      		<tr>
      			<th>Número da Ficha</th>
      			<th>Data de Recebimento</th>
      			<th>Agente</th>
      			<th>Tipo de Recolhimento</th>
      			<th>Nome do Entregador</th>
      			<th>CPF/CNPJ</th>
      			<th>Telefone</th>
      			<th>UF</th>
      			<th>Município</th>
      			<th>CEP</th>
            <th>Bairro</th>
            <th>Lote</th>
      			<th>Complemento</th>
      			<th>Tipo Documento</th>
      			<th>Numero Documento</th>
      			<th>Upload</th>
            <th>Última Procedência</th>
            <th>Dieta</th>
            <th>Nome Comum</th>
            <th>Nome Científico</th>
            <th>Família</th>
            <th>Ordem</th>
            <th>Código da Marcação</th>
            <th>Tipo de Marcação</th>
            <th>Local da Marcação</th>
      			<th>Município de Procedência</th>
      			<th>UF</th>
      			<th>Período em Quarentena</th>
      			<th>Tipo da Destinação</th>
      			<th>Subtipo da Destinação</th>
      			<th>Condição 1</th>
      			<th>Condição 2</th>
      			<th>Condição 3</th>
      			<th>ID Área</th>
      		</tr>
					<!-- Erro de Validação W3C Identificado -->
          <?php include 'perfilAnimal.inc.php'; ?>
      	</table>
      </div>
      </div>
			<!-- Erro de Validação W3C Identificado -->
			<div class="footer">
				<?php include 'footer.php'; ?>
			</div>

		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


	</body>

</html>
