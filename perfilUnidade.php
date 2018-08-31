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
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<title>Dados da unidade</title>
	</head>

	<body>
		<?php
		include 'header.inc.php';
		include 'exibirMenu.inc.php'; 
	?>
    <div id="pagePerfilAnimal" class="backgroundimgs">
				
  <div id="fundoTransparente"> 


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


	</body>

</html>
