<?php include 'conexao.php';
   //Inicio do codigo validação usuario
  session_start();

//  $senha = $_SESSION['senha'];
  $usuario = $_SESSION['usuario'];

  if (!isset($_SESSION['nomeCompleto']) && !isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
  }
?>
    <!-- Fim do codigo validação usuario -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="css/Estilo_Usuario.css" />
</head>
<body background="img/jaguar.jpg")>

    <p>Bem vindo <?php echo $usuario; ?> <br> Bem vindo <?php echo $usuario; ?><br> <a href="sair.php">Sair</a>
<dir class="superior">
</dir>
<dir class="inferior">
    <nav class="nav">
        <ul class="menu">
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Emitir Relatório</a></li>
            <li><a href="Cadastro_Animais.php">Cadastrar Animal</a></li>
            <li><a href="">Usuário</a>
                  <ul>
                      <li><a href=""></a>Cadastrar Usuário</li>
                      <li><a href="Editar_Usuario.php">Alterar</a></li>
                      <li><a href=""></a>Desativar</li>
                      <li><a href=""></a>Excluir</li>
                  </ul>
            </li>
            <li><a href="">Unidade Integrada</a>
                  <ul>
                    <li><a href="Cadastro_unidades.php">Cadastrar Usuário</a></li>
                    <li><a href="">Alterar</a></li>
                    <li><a href="">Desativar</a></li>
                    <li><a href="">Excluir</a></li>
                  </ul>
            </li>
            <li><a href="#">Desativar Conta</a></li>
        </ul>
    </nav>
</dir>

</body>
</html>
