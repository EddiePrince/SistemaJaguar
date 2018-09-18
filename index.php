﻿<?php
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
    <span id="loginTitle">Login <span id="orangeTitle">Sistema Jaguar</span></span>
  </div>
  <form  id="loginform" method="post">
    <p>Usuario</p>
        <input type="text" name="matricula"  id="usuario"  placeholder="Matricula" required autofocus>
        <p>Senha</p>
        <input type="password" name="senha" placeholder="Senha" required >
        <input class="postlogin" type="submit" name="entrar" value="Login">
        <a class="icon-img" href="ajudaLogin.php" target="_blank">Precisa de ajuda?</a>
        <?php include 'validarlogin.inc.php';?>
  </form>
</div>
</body>
</html>
