
<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>

<?php

//Inicio do codigo verificação de usuario
  session_start();

  $usuario = $_SESSION['matricula'];

  if (!isset($_SESSION['matricula'])) {
    header('Location: index.php');
    exit;
  }
?>
    <!-- Fim do codigo verificação de usuario -->
