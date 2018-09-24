<?php
  //Erro de Validação W3C Identificado
  //Conecção com Banco
  include 'conexao.inc.php';
  session_start();   // Sessão validação usuario
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <title>Login Sistema Jaguar</title>
</head>
<body id="indexbckg" class="backgroundimgs">

<div id="logincontainer">

  <div id="loginheader">
    <img src="img/jaguaricon.png" alt="Logo" id="logo">
    <span id="loginTitle">Login <span class="orangeTitle">Sistema Jaguar</span></span>
  </div>

  <form  id="loginform" method="post">
    <input class="loginFields" type="text" name="matricula"  id="usuario"  placeholder="Insira sua matrícula" required autofocus>
    <input class="loginFields" type="password" name="senha" placeholder="Insira a senha" required >
    <br>
    <!-- <a class="loginlink" href="#" onclick="popRecovery()">Esqueci minha senha --></a>
    <br>
    <input id="loginBtn" type="submit" name="entrar" value="Login">
    <br>
   <!--  <a class="loginlink" href="intro.php" target="_blank">Ajuda?</a> -->
    <?php include 'validarlogin.inc.php';?>
  </form>

</div>

</body>
</html>
