<?php
  include 'conexao.inc.php';
  include 'validarlogin.inc.php';
  
  $_SESSION['perfil']; 
  $perfil = $_SESSION['perfil'];
  if ($perfil == 'administrador') {
   $sql = "SELECT * FROM unidades";
   $result = $conexao->query($sql);
   if ($result->num_rows == 0) {
     echo "<script src='js/main.js'></script>";
   } 
  } 

  

?>
