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
    <?php
    include 'header.inc.php';
  ?>
  	<div id="pageListaUnidade" class="backgroundimgs">
      <div id="fundoTransparente">

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
                <th>Perfil Completo</th>
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
</div>
  </body>
</html>
