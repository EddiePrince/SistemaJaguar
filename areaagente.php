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

    <?php
    include 'header.inc.php';
    
  ?>

    <div id="pageAgente" class="backgroundimgs">
    

        <div id="fundoTransparente">
          <div class="container">
  					<h4>Bem vindo <?php echo $nome?>!</h4>
  				</div>

  				<div id="alerta">
  					<div id="boxtop"></div>
  					Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
  					<button class="btn btn-sucess" id="botao" onclick="apagar();">OK</button>
  				</div>

  				<div class="container">
  					<div class="row">
  						<div class="col-md-3 mb-3">
  							<a href="CadastroAnimal.php" class="btn btn-default navbar-btn pull-right"> <img src="img/remove-user.png" alt="#"><br> Animal </a>
  						</div>

  							<div class="col-md-3 mb-3">
  								<a href="listaUnidades.php" class="btn btn-default navbar-btn pull-right"> <img src="img/remove-user.png" alt="#"><br> Unidade   </a>
  							</div>

              </div>
  						</div>
  					</div>
            <!-- Erro de Validação W3C Identificado -->
            <div class="footer">
              <?php include 'footer.php'; ?>
            </div>
  				</div>




  </body>
</html>
