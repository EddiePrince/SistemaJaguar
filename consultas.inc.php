<?php
  //Conecção com Banco
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
     <title>Pesquisa</title>
   </head>
   <body>
<?php
    include 'header.inc.php';

  ?>
     <div id="pageAdm" class="backgroundimgs">
      <div id="fundoTransparente">
        <div class="container">
        <form  id="divBusca" class="form" action="consultas.inc.php" method="get">
          <input type="text" name="filtro" id="txtBusca" placeholder="Pesquisar..."/>
          <button type="submit" id="btnBusca"><img src="img/iconpesquisa.png" alt="Buscar..."/></button>
        </form>

          <?php

            $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

            $sqlUnidade = "select * from unidades where nome like '%$filtro%' order by nome";
            $sqlUsuario = "select * from Usuarios where nome like '%$filtro%' order by nome";
            $sqlAnimal = "select * from dadostriagem where nomeComum like '%$filtro%' order by nomeComum";

            $consultaUnidade = mysqli_query($conexao, $sqlUnidade);
            $consultaUsuario = mysqli_query($conexao, $sqlUsuario);
            $consultaAnimal = mysqli_query($conexao, $sqlAnimal);

            $registrosUnidade = mysqli_num_rows($consultaUnidade);
            $registrosUsuario = mysqli_num_rows($consultaUsuario);
            $registrosAnimal = mysqli_num_rows($consultaAnimal);


             if (empty($_GET['filtro'])) {
               echo "<br>Digite uma palavra para pesquisar!";
             }elseif (!empty($_GET['filtro']) && $registrosUnidade || $registrosUsuario || $registrosAnimal > 0) {

    					 echo "<p class='resultado_pesquisa'>Resultado da pesquisa com a palavra <strong> $filtro</strong>.</p>";

               echo "<p class='busca_unidade'><strong>$registrosUnidade </strong>registro(s) de Unidades encontrado(s).</p>"; //exibição da quanidade de registros encontrados
               echo "<p class='busca_usuario'><strong>$registrosUsuario </strong>registro(s) de Usuários encontrado(s).</p>"; //exibição da quanidade de registros encontrados
               echo "<p class='busca_animal'><strong>$registrosAnimal </strong>registro(s) de Animal(is) encontrado(s).</p>"; //exibição da quanidade de registros encontrados



             while ($exibirRegistros = mysqli_fetch_array($consultaUnidade)) {
               $idUnidade = $exibirRegistros[0];
               $nome = $exibirRegistros[1];
               $tipoUnidade= $exibirRegistros[2];
               $idTelefone= $exibirRegistros[3];
               $idCnpj = $exibirRegistros[4];
               $idEndereco = $exibirRegistros[5];


               echo "<article class='busca_unidade'>";
               // echo "id Unidade: ". " $idUnidade<br>";
               echo "Nome da Unidade: ". " $nome<br>";
               echo "Tipo: ". " $tipoUnidade<br>";
               echo "Telefone: ". " $idTelefone<br>";
               echo "CNPJ: ". " $idCnpj<br>";
               echo "Endereço: ". " $idEndereco<br>";
               echo "</article>";
               echo "<hr>";
             }
             while ($exibirRegistros =mysqli_fetch_array($consultaUsuario)) {
               $idUsuario = $exibirRegistros[0];
               $idTelefone = $exibirRegistros[1];
               $idUnidade = $exibirRegistros[2];
               $matricula= $exibirRegistros[3];
               $nome = $exibirRegistros[4];
               $email = $exibirRegistros[5];

               echo "<article class='busca_usuario'>";
               echo "Nome do Usuário: ". " $nome<br>";
               echo "Telefone: ". " $idTelefone<br>";
               echo "Unidade: ". " $idUnidade<br>";
               echo "Matricula: ". " $matricula<br>";
               echo "Nome: ". " $nome<br>";
               echo "Email: ". " $email<br>";
               echo "</article>";
               echo "<hr>";
             }

             while ($exibirRegistros =mysqli_fetch_array($consultaAnimal)) {
               $idTriagem = $exibirRegistros[0];
               $codMarcacao = $exibirRegistros[1];
               $tipoMarcacao = $exibirRegistros[2];
               $localMarcacao= $exibirRegistros[3];
               $ultimaProcedencia = $exibirRegistros[4];
               $nomeComun = $exibirRegistros[5];
               $nomeCientifico = $exibirRegistros[6];
               $familia = $exibirRegistros[7];
               $ordem = $exibirRegistros[8];


               echo "<article class='busca_animal'>";
               // echo "id Triagem: ". " $idTriagem<br>";
               echo "Codigo Marcação: ". " $codMarcacao<br>";
               echo "Ttipo  Marcação: ". " $tipoMarcacao<br>";
               echo "Local Marcação: ". " $localMarcacao<br>";
               echo "Ultima Procedência: ". " $ultimaProcedencia<br>";
               echo "Nome Comum: ". " $nomeComun<br>";
               echo "Nome Científico: ". " $nomeCientifico<br>";
               echo "Familia: ". " $familia<br>";
               echo "Ordem: ". " $ordem<br>";
               echo "</article>";
               echo "<hr>";
             }


           }   else {
               echo "<br><p class='sem_registros'>Nenhum registro encontrado a palavra <strong> $filtro. </strong></p>";
             }

             // header("Location:consultas.php");

             mysqli_close($conexao);

            ?>
        </div>
        </div>

       <div class="footer">
         <?php include 'footer.php'; ?>
       </div>
     </div>

   </body>
 </html>
