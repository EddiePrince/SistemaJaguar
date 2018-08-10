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
    <div class="container-fluid">

      <dir class="logo_admin">
        <img src="img/logo.png">
      </dir>
      <div >
        <!-- Menu -->
        <?php include 'menu/menuAdm.php'; ?>
        <!-- Fim Menu -->
      </div>

		<div class="corpoAdm">

			<br> Bem vindo Administrador!

	    <br><a class="logout" href="logout.php">Logout</a>

      <div class="password">
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
      </div>      <br>
		</div>
	</div>
</div>
	</body>

	</html>
