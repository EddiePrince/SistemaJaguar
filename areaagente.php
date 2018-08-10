<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf8mb4_unicode_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
    <title>Área Principal</title>
</head>
<body>

  <div id="page">
      <div class="container-fluid">

        <dir class="logo_admin">
          <a href="areaagente.php"> <img src="img/logo.png"></a>
        </dir>
        <dir class="logout">
          <a  class="btn btn-default" href="logout.php">Logout</a>
        </dir>
        <div >
          <!-- Menu -->
          <?php include 'menu/menuAgente.php'; ?>
          <!-- Fim Menu -->
        </div>

  		<div class="corpoAdm">


  <br><h1>Bem Vindo Agente</h1>


</body>
</html>
