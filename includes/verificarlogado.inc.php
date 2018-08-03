<?php
   //Verificar se o usuário é valido
  session_start();

  $usuario = $_SESSION['usuario'];

  if (!isset($_SESSION['nomeCompleto']) && !isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
  }

  ?>