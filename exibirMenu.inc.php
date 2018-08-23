<?php
  include 'conexao.inc.php';
  include 'validarlogin.inc.php';
  
  
  $_SESSION['perfil']; 
  $perfil = $_SESSION['perfil'];
  if ($perfil == 'administrador') {
    include 'menuAdm.php';
  } else if ($perfil == 'agente') {
    include 'menuAgente.php';
  }
?>
