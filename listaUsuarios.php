<?php
  //Erro de Validação W3C Identificado
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
  	<title>Usuarios Cadastrados</title>
  </head>

  <body>
  	<div id="pageListaUsuario">
  		<div class="container-fluid">
  			<div class="logo_admin">
  			 <img src="img/logo.png" alt="Logo">
  			</div>

        <div>
  			<div class="corpoAdm" id="corpoAdm" >
  				<!-- Menu -->
          <!-- Erro de Validação W3C Identificado -->
  				<?php include 'menuAdm.php'; ?>
  				<!-- Fim Menu -->
          <div class="container">

    		<h2>Lista de Usuarios</h2>
      	<table class="table">
      		<tr>
      			<th>Nome</th>
      			<th>Perfil</th>
            <th>E-mail</th>
            <th>Celular</th>


          </tr>
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'listaUsuarios.inc.php' ?>
    	  </table>

      </div>
    </div>
    <!-- Erro de Validação W3C Identificado -->
    <div class="footer">
      <?php include 'footer.php'; ?>
    </div>
  </div>
  </div>
  </div>

  </body>
</html>
