<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'jaguar_sistem';

  // Conexão
  $conexao = mysqli_connect($hostname, $username, $password, $database);
  if($conexao->connect_error)
  {
    die("Conexão falhou: " . $conexao->connect_error);
  }
?>
