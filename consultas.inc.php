<?php
  //Conecção com Banco
  include 'conexao.inc.php';


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



             if (!empty($_GET['filtro'])) {

				 if ($registrosUnidade > 0) {

					 echo "<br><strong>Resultado da pesquisa com a palavra  $filtro. </strong><br><br>";

           echo "<strong>$registrosUnidade </strong>registro(s) de Unidades encontrado(s).<br><br>"; //exibição da quanidade de registros encontrados
           echo "<strong>$registrosUsuario </strong>registro(s) de Usuários encontrado(s).<br><br>"; //exibição da quanidade de registros encontrados
           echo "<strong>$registrosAnimal </strong>registro(s) de Animal encontrado(s).<br><br>"; //exibição da quanidade de registros encontrados

				 }else {
				 	echo "<br><br>Nenhum registro encontrado a palavra <strong> $filtro. </strong>";
				 }

         while ($exibirRegistros = mysqli_fetch_array($consultaUnidade)) {
           $idUnidade = $exibirRegistros[0];
           $nome = $exibirRegistros[1];
           $tipoUnidade= $exibirRegistros[2];
           $idTelefone= $exibirRegistros[3];
           $idCnpj = $exibirRegistros[4];
           $idEndereco = $exibirRegistros[5];

           echo "<h3>Unidade</h3>";

           echo "<article>";
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

           echo "<h3>Usuario</h3>";

           echo "<article>";
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
           
           echo "<h3>Animal</h3>";

           echo "<article>";
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


       }

         mysqli_close($conexao);

          ?>
