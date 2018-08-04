<?php
  include 'includes/conexao.php';
  include 'includes/verificausuario.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="css/Estilo_Usuario.css" />
</head>
<body>

      <br>
       Bem vindo <?php echo $usuario; ?> <br> Bem vindo <?php echo $usuario; ?>
      <br> <a href="sair.php">Sair</a>
<dir>
    <nav>
        <ul>
            <li><a href="ajuda.php">Ajuda</a></li>
            <li><a href="#">Emitir Relatório</a></li>
            <li><a href="Cadastro_Animais.php">Cadastrar Animal</a></li>
            <li><a href="">Usuário</a>
                  <ul>
                      <li><a href="cadastro_usuario.php">Cadastrar</a></li>
                      <li><a href="editar_usuario.php">Alterar Dados</a></li>
                      <li><a href="Desativar.php">Desativar</a></li>
                      <li><a href="Excluir.php">Excluir Usuário do Banco de Dados</a></li>
                  </ul>
            </li>
            <li><a href="">Unidade Integrada</a>
                  <ul>
                    <li><a href="Cadastro_unidades.php">Cadastrar</a></li>
                    <li><a href="Alterar.php">Alterar</a></li>
                    <li><a href="Desativar.php">Desativar</a></li>
                    <li><a href="Excluir.php">Excluir</a></li>
                  </ul>
            </li>
            <li><a href="#">Desativar Conta</a></li>
        </ul>
    </nav>
</dir>

</body>
</html>
