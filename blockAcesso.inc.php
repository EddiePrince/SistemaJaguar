<?php
  //Conecção com Banco
  include 'conexao.inc.php';

  $sql = "SELECT * FROM unidades";
  $result = $conexao->query($sql);
  if ($result->num_rows == 0) {
     header('Location:CadastroUnidade.php');
   }
?>
 