<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href="css/Estilo_Usuario.css" />
</head>
<body background="img/jaguar.jpg")>
  <h1>Bem Vindo Agente</h1>
  <br> <a href="logout.php">Logout</a>
  </p>
<dir class="superior">
</dir>
<dir class="inferior">
    <nav class="nav">
        <ul class="menu">
            <li><a href="ajuda.php">Ajuda</a></li>
                <li><a href="menu/emitirRelatorio.php">Emitir Relatório</a></li>
                    <li><a href="CadastroAnimal.php">Cadastrar Animal</a></li>
                    <li><a href="menu/alterarUsuario.php">Alterar Dados Usuário</a></li>
            <li><a href="menu/desativarUsuario.php">Desativar Conta</a></li>
        </ul>
    </nav>
</dir>

</body>
</html>
