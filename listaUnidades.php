<?php
  //Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  //include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
  	<title>Unidades Cadastradas</title>
  </head>

  <body>
  	<div id="pageListaAnimais">
  		<div class="container-fluid">

  			<div class="logo_admin">
  			 <img src="img/logo.png" alt="Logo">
  			</div>
  			<div class="logout">
  				<a href="areaadm.php"> <input class="btn btn-default" type="button" name="btn" value="Voltar"></a>
  				<a  class="btn btn-default" href="logout.php">Logout</a>
  			</div>
  			<div >
          <div class="corpoAdm" id="corpoAdm" >
            <div>
  				<!-- Menu -->
  				<?php include 'menuAdm.php'; ?>
  				<!-- Fim Menu -->

  	    <div class="container">

    		<h2>Lista de Unidades</h2><br>
      	<table class="table">
      		<tr>
      			<th> Nome</th>
      			<th>Local</th>
      			<th>Data </th>
      			<th>Agente</th>
      			<th>Perfil</th>
          </tr>
          <?php include 'listaAnimais.inc.php' ?>

    	  </table>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  </body>
</html>
