
<!-- verificação de usuario -->
<?php
//Conecção com Banco
  include 'conexao.inc.php';
  include 'validarlogin.inc.php';

  SESSION_START();
  $_SESSION['nome'];
  $_SESSION['perfil'];
  $nome = $_SESSION['nome'];
  $perfil = $_SESSION['perfil'];

?>
