
<!-- verificação de usuario -->
<?php
//Conecção com Banco
  include 'conexao.inc.php';
  include 'validarlogin.inc.php';

  SESSION_START();

  $nome = $_SESSION['nome'];
  $perfil = $_SESSION['perfil'];
  

?>
