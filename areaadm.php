<?php
//Erro de Validação W3C Identificado
	include 'conexao.inc.php';
	include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<title>Área Principal</title>
</head>

<body>

	<?php
		include 'header.inc.php';
	?>

	<div id="alerta">
		<div id="boxtop"></div>
			Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
		<button id="botao" onclick="apagar();">OK</button>
	</div>


	<div id="pageAdm" class="backgroundimgs">
		<div id="fundoTransparente">
	<div class="container">
		<!-- mensagem de Bem Vindo -->
		
		<div id="bemVindoAdm">
		Colocar mensagem de Bem Vindo			
		</div>	
		<div id="bemVindoAdm">
		<img src="img/Manual_do_Usuario_Adm.jpg" alt="Ajuda Adm">			
		</div>	
	</div>	


<!-- 			<div class="container">
				<div class="row">
				<div class="container" id="container">
				<div class="row">
				<div class="col-md-4 mb-3">
				<a  href="listaUnidades.php" class="btn btn-default navbar-btn pull-right"> <img src="img/unidade.png" alt="#"><br>  Unidade   </a>
				</div>
				<div class="col-md-4 mb-3">
				<a href="listaUsuarios.php" class="btn btn-default navbar-btn pull-right"> <img src="img/usuario.png" alt="#"><br> Usuário </a>
				</div>
				<div class="col-md-4 mb-3">
				<a href="listaAnimais.php" class="btn btn-default navbar-btn pull-right"> <img src="img/animal.png" alt="#"><br>  Animal </a>
				</div>
				<div class="col-md-4 mb-3">
				<a href="consultas.php" class="btn btn-default navbar-btn pull-right"> <img src="img/pesquisaPrincipal.png" alt="#"><br>  Consultas </a>
				</div>
				</div>
				</div>
				</div>	<!-- Row -->
			</div> --> <!-- Container -->


		</div> <!-- Fundo transparente -->
	</div> <!-- Plano de fundo -->

	<?php include 'footer.php';
	?>

</body>
</html>
