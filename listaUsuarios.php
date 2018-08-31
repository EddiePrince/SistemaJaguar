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
  	<title>Usuarios Cadastrados</title>
  </head>

  <body>
    <?php
    include 'header.inc.php';
  ?>
  	<div id="pageListaUsuario" class="backgroundimgs">
    <div id="fundoTransparente"> 

          <br><div  id="Cadastrar">
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
  </div>
    
      <?php include 'footer.php'; ?>
    
  </body>
</html>
