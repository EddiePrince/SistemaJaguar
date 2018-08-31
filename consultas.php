<?php
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';

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
 		<link rel="stylesheet" href="style/bootstrap.min.css">
     <title>Pesquisa</title>
   </head>
   <body>
<?php
    include 'header.inc.php';
    
  ?>
     <div id="pageAdm" class="backgroundimgs">
       

 			<div id="fundoTransparente">
 				<div class="container"><br><br>

          <div id="alerta">
            <div id="boxtop"></div>
            Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
            <button id="botao" onclick="apagar();">OK</button>
          </div>

       <section>

      

         <?php

             if (!empty($_GET['filtro'])) {

				 if ($registros > 0) {
					 echo "<br><strong>Resultado da pesquisa com a palavra  $filtro. </strong><br><br>";
					 echo "<strong>$registros </strong>registro(s) encontrado(s).<br><br>"; //exibição da quanidade de registros encontrados

				 }else {
				 	echo "<br><br>Nenhum registro encontrado a palavra <strong> $filtro. </strong>";
				 }
         while ($exibirRegistros =mysqli_fetch_array($consulta)) {
           $idUnidade = $exibirRegistros[0];
           $nome = $exibirRegistros[1];
           $tipoUnidade= $exibirRegistros[2];
           $idTelefone= $exibirRegistros[3];
           $idCnpj = $exibirRegistros[4];
           $idEndereco = $exibirRegistros[5];

           echo "<article>";
           // echo "id Unidade: ". " $idUnidade<br>";
           echo "Nome da Unidade: ". " $nome<br>";
           echo "Tipo: ". " $tipoUnidade<br>";
           echo "Telefone: ". " $idTelefone<br>";
           echo "CNPJ: ". " $idCnpj<br>";
           echo "Endereço: ". " $idEndereco<br>";
           echo "</article>";
         }

                      }

         mysqli_close($conexao);

          ?>

       </section>
     </div>
   </div>
     <!-- Erro de Validação W3C Identificado -->
     <div class="footer">
       <?php include 'footer.php'; ?>
     </div>

   </body>
 </html>
