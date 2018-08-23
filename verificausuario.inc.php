
<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'validarlogin.inc.php';
  
  SESSION_START();
  $_SESSION['nome']; 
  $_SESSION['perfil']; 
  $nome = $_SESSION['nome'];
  $perfil = $_SESSION['perfil'];
  
?>
    <!-- Fim do codigo verificação de usuario -->
