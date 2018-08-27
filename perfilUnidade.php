<?php
	//Erro de Validação W3C Identificado
  //Conexão com Banco	
	include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Dados da unidade</title>
	</head>

	<body>
    <div id="pagePerfilAnimal">
			<div class="container-fluid">
				<div class="logo_admin">
					<img src="img/logo.png" alt="Logo">
				</div>

				<div class="corpoAdm">
					<!-- Menu -->
					<!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>


        <h1>Dados da Unidade</h1>

    		<div class="container">


      	<table>
      		<tr>
      			<th>Nome</th>
      			<th>Tipo da unidade</th>
      			<th>Telefone</th>
      			<th>CNPJ</th>
      			<th>UF</th>
      			<th>Município</th>
      			<th>CEP</th>
      			<th>Bairro</th>
      			<th>Lote</th>
      			<th>Complemento</th>
      		</tr>
					<!-- Erro de Validação W3C Identificado -->
          
          <?php include 'perfilUnidade.inc.php'; ?>
      	</table>
      </div>
      </div>
			<!-- Erro de Validação W3C Identificado -->
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
