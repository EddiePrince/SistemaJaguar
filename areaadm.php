<?php
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';

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
            <li><a href="">Cadastrar Animal</a>
              <ul>
                  <li><a href="menu/listaAnimais.php">Visualizar</a></li>
                  <li><a href="CadastroAnimal.php">Cadastrar</a></li>
                  <li><a href="menu/alterarAnimal.php">Alterar Dados</a></li>
                  <li><a href="menu/desativarAnimal.php">Desativar</a></li>
                  <li><a href="menu/excluirAnimal.php">Excluir Animal do Banco de Dados</a></li>
              </ul>
            </li>
            <li><a href="">Usuários</a>
                  <ul>
                  <li><a href="menu/listaUsuarios.php">Visualizar</a></li>
                      <li><a href="cadastroUsuario.php">Cadastrar</a></li>
                      <li><a href="menu/alterarUsuario.php">Alterar Dados</a></li>
                      <li><a href="menu/desativarUsuario.php">Desativar</a></li>
                      <li><a href="menu/excluirUsuario.php">Excluir Usuário do Banco de Dados</a></li>
                  </ul>
            </li>
            <li><a href="">Unidades Integradas</a>
                  <ul>
                  <li><a href="menu/listaUnidades.php">Visualizar</a></li>
                    <li><a href="CadastroUnidade.php">Cadastrar</a></li>
                    <li><a href="menu/alterarUnidade.php">Alterar</a></li>
                    <li><a href="menu/desativarUnidade.php">Desativar</a></li>
                    <li><a href="menu/excluirUnidade.php">Excluir Unidade do Banco de Dados</a></li>
                  </ul>
            </li>
            <li><a href="#">Desativar Conta</a></li>
        </ul>
    </nav>
</dir>

</body>
</html>
