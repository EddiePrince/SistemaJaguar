<?php
  //Erro de Validação W3C Identificado
  //Conexão com Banco
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
  	<title>Cadastro de Unidades</title>
  </head>

  <body>
  	<div id="pageListaAnimais">

  			<div class="logo_admin">
  			 <img src="img/logo.png" alt="Logo"> <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
  			</div>

  			<div >
  				<div class="corpoAdm" id="corpoAdm" >
            <div>

  				<!-- Menu -->
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>
  				<!-- Fim Menu -->


  	    <div class="container">

    		<h2>Lista de Animais</h2><br>
      	<table class="table">
      		<tr>
      			<th>Número da Ficha</th>
      			<th>Data de Recebimento</th>
      			<th>Agente</th>
            <th>Perfil Completo</th>

          </tr>
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'listaAnimais.inc.php' ?>

    	  </table>
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
