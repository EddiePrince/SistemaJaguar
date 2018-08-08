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
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
</head>
<body>

  <!-- Menu -->
  <div>
  <input type="checkbox" id="bt_menu">
  <label for="bt_menu">&#9776;</label>

    <nav class="menu">
      <ul>
        <li> <a href="areaagente.php">Home</a></li>
        <li><a href="">Usuários</a>
          <ul>
            <li><a href="menu/listaUsuarios.php">Visualizar</a></li>
            <li><a href="menu/alterarUsuario.php">Alterar Dados Pessoais</a></li>
            <li><a href="menu/desativarUsuario.php">Desativar Conta</a></li>
          </ul>
        </li>
        <li><a>Animais</a>
          <ul>
          <li><a href="CadastroAnimal.php">Cadastrar</a></li>
          <li><a href="menu/listaAnimais.php">Visualizar</a></li>
          </ul>
        </li>
        <li><a href="">Unidades</a>
          <ul>
            <li><a href="menu/listaUnidades.php">Visualizar</a></li>
          </ul>
        </li>
        <li><a href="#">Emitir Relatório</a></li>
        <li><a href="ajuda.php">Ajuda</a></li>
        <li><a href="ajuda.php">inserir pesquisa aqui</a></li>
      </ul>
    </nav>
  </div>
    <!-- Fim Menu -->

  <br><h1>Bem Vindo Agente</h1>


</body>
</html>
