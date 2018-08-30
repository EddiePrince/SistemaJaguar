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
		<link rel="stylesheet" href="style/bootstrap.min.css">>
  	<title>Usuarios Cadastrados</title>
  </head>

  <body>
  	<div id="pageListaUsuario">
  			<div class="logo_admin">
  			 <img src="img/logo.png" alt="Logo"> <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
  			</div>

        <div>
  			<div class="corpoAdm" id="corpoAdm" >
  				<!-- Menu -->
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>
  				<!-- Fim Menu -->

          <br><div  id="Cadastrar"  >
            <a id="Cadastrar" href="CadastroUsuario.php" >  Cadastrar Usuario </a>
            <!-- <img src="img/logout.png" alt="Cadastrar"> -->
          </div>
          <div class="container">
            <div class="listas">
              <h2>Lista de Usuarios</h2>
              <table class="table">
                <tr>
                  <th>Matricula</th>
                  <th>Nome</th>
                  <th>Perfil</th>
                  <th>E-mail</th>
                  <th>Telefone</th>
                  <th>Unidade</th>
                </tr>
                <!-- Erro de Validação W3C Identificado -->
                <?php include 'listaUsuarios.inc.php' ?>
              </table>

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
