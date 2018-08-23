<?php
// Erro de Validação W3C Identificado
  //Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  //include 'verificausuario.inc.php';


         // Consultas
  $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

  $sql = "select * from unidades where nome like '%$filtro%' order by nome";
  $consulta = mysqli_query($conexao, $sql);
  $registros = mysqli_num_rows($consulta); //mostrar quantos registros existem no banco

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
  			 <img src="img/logo.png" alt="Logo">
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
  				<?php include 'menuAdm.php'; ?>
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
         <?php

           if (!empty($_GET['filtro'])) {

  				 if ($registros > 0) {
  					 echo "<br>Resultado da pesquisa com a palavra <strong> $filtro. </strong><br><br><br>";
  					 echo "<strong>$registros registro(s) encontrado(s).</strong><br><br>"; //exibição da quanidade de registros encontrados
  				 }else {
  				 	echo "<br><br>Nenhum registro encontrado a palavra <strong> $filtro. </strong>";
  				 }
           ?> <a href="listaUnidades.php"><button type="submit" class="btn btn-default"> Limpar Pesquisa</button></a><br><br> <?php
           while ($exibirRegistros =mysqli_fetch_array($consulta)) {
             $codigo = $exibirRegistros[0];
             $nome = $exibirRegistros[1];
             $email = $exibirRegistros[2];
             $profissao = $exibirRegistros[3];

             echo "<article>";
             echo "$codigo<br>";
             echo "$nome<br>";
             echo "$email<br>";
             echo "$profissao<br><br>";
             echo "</article>";
           }
        }
           mysqli_close($conexao);
            ?>


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
