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
  	<title>Unidades Cadastradas</title>
  </head>

  <body >
  	<div id="pageListaUnidade">
  		<div class="container-fluid">

  			<div class="logo_admin">
  			 <img src="img/logo.png" alt="Logo"> <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
       </div>

                  <form class="form" action="" method="get">
                  <div id="divBusca">
                  	<img src="img/icon pesquisa.png" alt="Buscar..."/>
                  	<input type="text" name="filtro" id="txtBusca" placeholder="Pesquisar..."/>
                  	<button type="submit" id="btnBusca">Buscar</button>
                  </div>
                </form>

          <div class="corpoAdm" id="corpoAdm" >
            <div>
  				<!-- Menu -->
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>
  				<!-- Fim Menu -->

  	    <div class="container">

    		<h2>Lista de Unidades</h2><br>
      	<table class="table">
      		<tr>
      			<th>Nome</th>
      			<th>Tipo de Unidade</th>
          </tr>
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'listaUnidades.inc.php' ?>
    	  </table>

        <!-- Consultas -->
        <?php include 'consultas/consUnidade.inc.php'; ?>

      </div>
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
