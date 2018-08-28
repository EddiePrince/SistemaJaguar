
<!-- verificação de usuario -->
<?php
//Conecção com Banco
  include 'conexao.inc.php';
  include 'validarlogin.inc.php';

  SESSION_START();

  $nome = $_SESSION['nome'];
  $perfil = $_SESSION['perfil'];
  
  
  $usuario = $_SESSION['matricula'];
  $senha = $_SESSION['senha'];
  if (!isset($usuario) && !isset($senha)) {
    header('Location: index.php');
    exit;
  }
?>
    <!-- Fim do codigo verificação de usuario -->