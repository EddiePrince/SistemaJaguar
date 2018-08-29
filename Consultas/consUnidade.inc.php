<?php
include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
         // Consultas
  $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

  $sql = "select * from unidades where nome like '%$filtro%' order by nome";
  $consulta = mysqli_query($conexao, $sql);
  $registros = mysqli_num_rows($consulta); //mostrar quantos registros existem no banco


  if (!empty($_GET['filtro'])) {

  if ($registros > 0) {
    echo "<br><h2>Resultado da pesquisa com a palavra <strong> $filtro. </strong></h2><br><br><br>";
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
