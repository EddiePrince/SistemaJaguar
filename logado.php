<?php
  include 'includes/conexao.php';
  include 'includes/verificarlogado.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href="css/Estilo_Usuario.css" />
</head>
<body background="img/jaguar.jpg")>
  <p>Bem vindo <?php print_r($_SESSION); ?> <br> <a href="sair.php">Sair</a>
  </p>
<dir class="superior">
</dir>
<dir class="inferior">
    <nav class="nav">
        <ul class="menu">
            <li><a href="#">Ajuda</a></li>
                <li><a href="#">Emitir Relatório</a></li>
                    <li><a href="Cadastro_Animais.php">Cadastrar Animal</a></li>
                    <li><a href="Editar_Usuario.php">Editar Usuário</a></li>
            <li><a href="#">Desativar Conta</a></li>
        </ul>
    </nav>
</dir>

</body>
</html>
