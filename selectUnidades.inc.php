<?php

  include 'conexao.inc.php';
 $sql = "SELECT * FROM unidades";
   $result = $conexao->query($sql);

   if($result->num_rows > 0){
    echo "<option>".'Selecione a unidade'."</option>"; 
    while($row = $result->fetch_assoc())
    {

      echo "<option>" . $row['nome'] . "</option>";

     }
   }
   else{
      echo "Dados não encontrados";
   }


?>
