<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
    <title>Área Principal</title>
  </head>

	<body>

    <div id="page">
      <div class="container-fluid">

      <div class="logo_admin">
        <a href="areaadm.php"> <img src="img/logo.png" alt="Logo"></a>
      </div>
      <div class="logout">
        <a  class="btn btn-default" href="logout.php">Logout</a>
      </div>
      <div >
        <!-- Menu -->
        <?php include 'menu/menuAdm.php'; ?>
        <!-- Fim Menu -->
      </div>

  		<div class="corpoAdm">

			<br> Bem vindo Administrador!


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
