<?php

  include 'conexao.inc.php';
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
  <br> <a href="sair.php">Sair</a>
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
