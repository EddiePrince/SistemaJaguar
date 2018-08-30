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
		<link rel="stylesheet" href="style/bootstrap.min.css">
  	<title>Unidades Cadastradas</title>
  </head>

  <body >
  	<div id="pageListaUnidade">

  			<div class="logo_admin">
  			 <img src="img/logo.png" alt="Logo"> <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
       </div>


          <div class="corpoAdm" id="corpoAdm" >
            <div>
  				<!-- Menu -->
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>
  				<!-- Fim Menu -->

          <br><div  id="Cadastrar"  >
            <a id="Cadastrar" href="CadastroUnidade.php" >  Cadastrar Unidade </a>
            <!-- <img src="img/logout.png" alt="Cadastrar"> -->
          </div>

  	    <div class="container">
          <div class="listas">
          <h2>Lista de Unidades</h2><br>
            <table class="table">
              <tr>
                <th>Nome</th>
                <th>Tipo de Unidade</th>
                <!-- <th>Perfil</th> -->
              </tr>
              <!-- Erro de Validação W3C Identificado -->
              <?php include 'listaUnidades.inc.php' ?>
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
