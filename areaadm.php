<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8">
		<title>Área Principal</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
</head>

	<body>
    <div id="page">
      <!-- Menu -->
        <dir class="logo-admin">
          <img src="img/logo.png">
        </dir>
    <div>

    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
      <ul>
        <li> <a href="areaadm.php">Home</a></li>
        <li><a href="">Usuários</a>
          <ul>
            <li><a href="menu/listaUsuarios.php">Visualizar</a></li>
            <li><a href="cadastroUsuario.php">Cadastrar</a></li>
            <li><a href="menu/excluirUsuario.php">Excluir Usuário do Banco de Dados</a></li>
          </ul>
        </li>
        <li><a href="">Animais</a>
          <ul>
            <li><a href="menu/listaAnimais.php">Visualizar</a></li>
            <li><a href="CadastroAnimal.php">Cadastrar</a></li>
            <li><a href="menu/excluirAnimal.php">Excluir Animal do Banco de Dados</a></li>
          </ul>
        </li>
        <li><a href="">Unidades</a>
          <ul>
            <li><a href="menu/listaUnidades.php">Visualizar</a></li>
            <li><a href="CadastroUnidade.php">Cadastrar</a></li>
            <li><a href="menu/excluirUnidade.php">Excluir Unidade do Banco de Dados</a></li>
          </ul>
        </li>
        <li><a href="#">Emitir Relatório</a></li>
        <li><a href="rec_senha_adm.php" class="recsenha">Recuperação de Senha</a></li>
        <li><a href="ajuda.php">Ajuda</a></li>
      </ul>
    </nav>
    </div>
        <!-- Fim Menu -->


		<div id="maincontainer">
			<br> Bem vindo	<?php echo $usuario; ?>
	    <br><a class="logout" href="logout.php">Logout</a>
      <div>
        <?php
        $result_recSenha = "SELECT * FROM recuperacaosenha";
        $resultado_recSenha = mysqli_query($conexao, $result_recSenha);
        $row_recSenha = mysqli_fetch_assoc($resultado_recSenha);
        //$linhas = mysqli_num_rows($row_recSenha);
        ?>
        <!-- <h4>Solicitações de recuperação de senha</h4> -->
        <?php
        if ($row_recSenha > 0) {
          ?>
        <div>
          <a href="rec_senha_adm.php"> <?php echo "<h6 style='color:green;'><br>Você tem mensagem de recuperação de Senha aqui<h6>"; ?></a>
          </div>
          <?php
        }else {
          echo "<h5 style='color:orange;'>Nenhuma mensagem de solicitação para recuperação de Senha!<h5>";
        }
        ?>
      </div><br>
			<div>
				<a href="index.php">Voltar</a>
			</div>
		</div>
	</div>



	</body>

	</html>
