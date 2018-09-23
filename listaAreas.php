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
  	<title>Lista de Areas</title>
  </head>

  <body>
    <?php
    include 'header.inc.php';
  ?>
  	<div id="pageListaAnimais" class="backgroundimgs">
  <div id="fundoTransparente">
      <br><div  id="Cadastrar"  >
          <a id="Cadastrar" href="Cad_areaSoltura.php" >  Cadastrar Área</a>
        </div>

        <div class="container">
        <div class="listas">
        <h2>Lista de Áreas</h2><br>
        <table class="table">
          <tr>
            <th>Nome do Proprietário</th>
            <th>Municipio</th>
            <th>Nome da Propriedade</th>
            <th>Bioma</th>
            <th>Perfil Completo</th>          
          </tr>
          <!-- Erro de Validação W3C Identificado -->
          <?php include 'listaAreas.inc.php' ?>

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
