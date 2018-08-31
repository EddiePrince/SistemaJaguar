<?php
  //Erro de Validação W3C Identificado
  //Conecção com Banco
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
		<div id="pageAdm">
			<div class="logo">
				<div class="logo_admin">
					<a  href="areaadm.php"> <img src="img/logo.png" alt="Logo"></a> <a id="logout" href="logout.php">  Logout  <img src="img/logout.png" alt="Logout"></a>
				</div>
				<div>
					<!-- Menu -->
					<!-- Erro de Validação W3C Identificado -->
					<?php include 'exibirMenu.inc.php'; ?>
					<!-- Fim Menu -->
				</div>
			</div>

			<div class="corpoAdm">
  			<div id="alerta">
  				<div id="boxtop"></div>
  				Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
            <button id="botao" onclick="apagar();">OK</button>
  			</div>


				<div class="container" id="container">
          <iframe src="emailUsuario.php" width="1200" height="700"></iframe>

		</div>
		</div>
    <!-- Erro de Validação W3C Identificado -->
    <div class="footer">
      <?php include 'footer.php';

      ?>
    </div>
		</div>



	</body>

	</html>
