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
  	<title>Lista de Animais</title>
  </head>

  <body>
    <?php
    include 'header.inc.php';
  ?>
  	<div id="pageListaAnimais" class="backgroundimgs">

  <div id="fundoTransparente">
      <br><div  id="Cadastrar"  >
          <a id="Cadastrar" href="CadastroAnimal.php" >  Cadastrar Animal</a>
          <!-- <img src="img/logout.png" alt="Cadastrar"> -->
        </div>

        <div class="container">
        <div class="listas">
        <h2>Lista de Animais</h2><br>
        <table class="table">
          <tr>
            <th>Número da Ficha</th>
            <th>Data de Recebimento</th>
            <th>Agente</th>
            <!-- <th>Nome Científico</th> -->
           <!--  <th>Perfil Completo</th> -->

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
  </body>
</html>
