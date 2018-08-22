<?php

include 'conexao.inc.php';

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from unidades where nome like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta); //mostrar quantos registros existem no banco

 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>Pesquisa</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>

     <div class="container">

       <section>
         <h1>Consultas</h1> <hr><br><br>

         <form class="form" action="" method="get">
           <strong>Filtrar por nome: </strong><input type="text" name="filtro" class="campo" requerid autofocus>
           <button type="submit" value="Pesquisar" class="btn">Pesquisar</button>
         </form>

         <?php


				 if ($registros > 0) {
					 echo "<br>Resultado da pesquisa com a palavra <strong> $filtro. </strong><br><br><br>";
					 echo "<strong>$registros registro(s) encontrado(s).</strong><br><br>"; //exibição da quanidade de registros encontrados
				 }else {
				 	echo "<br><br>Nenhum registro encontrado a palavra <strong> $filtro. </strong>";
				 }
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

         mysqli_close($conexao);
          ?>

       </section>
     </div>

   </body>
 </html>
