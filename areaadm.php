<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
  <div id="maincontainer">
    <h1>Bem Vindo Administrador</h1>
        <br>
        Bem vindo <?php echo $usuario; ?>
        <br> <a href="logout.php">Logout</a>
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
              <li><a href="rec_senha_adm.php">Recuperação de Senha</a></li>



    <div id="maincontainer">
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
  		</div>
    </ul>
  </nav>
</dir>
  	<div>
  		<a href="index.php">Voltar</a>
  	</div>
  </div>
    </div>

  </div>


</body>
</html>
