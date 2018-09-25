<?php
  //Conecção com Banco
  include 'conexao.inc.php';

  SESSION_START();
  include 'validarlogin.inc.php';
   $confsenha = $_SESSION['confsenha'];


  if (isset($_POST['senha']) && $_POST['senha'] != $confSenha) {
    echo "Digite novamente, caracteres confirmação de senha são diferentes da senha. ";
  }




?>
