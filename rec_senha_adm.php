<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf8mb4_unicode_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Recuperação de Senha</title>
</head>
<body>
  <div id="page">
    <div class="container-fluid">

      <dir class="logo_admin">
       <img src="img/logo.png">
      </dir>
      <dir class="logout">
        <a  class="btn btn-default" href="logout.php">Logout</a>
      </dir>
      <div >
        <!-- Menu -->
        <?php include 'menu/menuAdm.php'; ?>
        <!-- Fim Menu -->
      </div>

		<div class="corpoSenha">

	<?php
	$result_recSenha = "SELECT * FROM recuperacaosenha";
	$resultado_recSenha = mysqli_query($conexao, $result_recSenha);
	$row_recSenha = mysqli_fetch_assoc($resultado_recSenha);
	//$linhas = mysqli_num_rows($row_recSenha);
	?>

  <?php
  	$sql = "SELECT * FROM recuperacaosenha";
  	$result = $conexao->query($sql);

  	if($result->num_rows > 0){
  		while($row = $result->fetch_assoc())
  		{

        echo "<br>Mensagem de solicitação para recuperar senha<br>";
        echo "<Br><strong>Dados da Mensagem: </strong>";
        echo "<br>Matricula: " .$row_recSenha['matricula'];
        echo "<br>Nome: " .$row_recSenha['nome'];
        echo "<br>Email: " .$row_recSenha['email'];
        echo "<br>Titulo: " .$row_recSenha['titulo'];
        echo "<br>Mensagem: " .$row_recSenha['mensagem'];
        echo "<br><br> ";
  		}
  	}
  	else{
      echo "<br><h5 style='color:orange;'>Nenhuma mensagem de solicitação para recuperação de Senha!<h5>";
  	}
  ?>


		<!-- <h4>Solicitações de recuperação de senha</h4> -->
		 <div>
			<?php
			// if ($row_recSenha > 0) {
      //   //ver codigo para exibir mais de uma mensagem
			// 	echo "<br>Mensagem de solicitação para recuperar senha<br>";
      //   echo "<Br><strong>Dados da Mensagem: </strong>";
      //   echo "<br>Matricula: " .$row_recSenha['matricula'];
      //   echo "<br>Nome: " .$row_recSenha['nome'];
      //   echo "<br>Email: " .$row_recSenha['email'];
      //   echo "<br>Titulo: " .$row_recSenha['titulo'];
      //   echo "<br>Mensagem: " .$row_recSenha['mensagem'];
      //   echo "<br><br> ";
			// }else {
      //   echo "<br><h5 style='color:orange;'>Nenhuma mensagem de solicitação para recuperação de Senha!<h5>";
      // }

			?>
		</div>
	<div>
		<a href="areaadm.php">Voltar</a>
	</div>

  </div>
  </div>
  </div>
</body>
</html>
