<?php
  include 'includes/conexao.php';

//Inicio do codigo verificação de usuario
  session_start();

  $usuario = $_SESSION['usuario'];

  if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
  }
?>
    <!-- Fim do codigo verificação de usuario -->
