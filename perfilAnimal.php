<?php
	include 'conexao.inc.php';
	include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<link rel="stylesheet" href="style/bootstrap.min.css">
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
          <div class="tabs">
            <button class="tablinks" onclick="changeTab()">Dados da Ficha</button>
            <button class="tablinks">Dados do Entregador</button>
            <button class="tablinks">Dados da Triagem</button>  
          </div>

          <!--Conteúdo da Ficha-->
          <div id="ficha" class="tabcontent">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            </p>
          </div>

          <!--Conteúdo do Entregador-->
          <div id="entregador" class="tabcontent">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            </p>
          </div>
          
          <!--Conteúdo da Triagem-->
          <div id="triagem" class="tabcontent">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            </p>   
          </div>

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
