<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>


<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Recuperação de Senha</title>
</head>
<body>
  <div class="maincontainer">


	<?php
	$result_recSenha = "SELECT * FROM recuperacaosenha";
	$resultado_recSenha = mysqli_query($conexao, $result_recSenha);
	$row_recSenha = mysqli_fetch_assoc($resultado_recSenha);
	//$linhas = mysqli_num_rows($row_recSenha);
	?>
	<div id="maincontainer">
		<!-- <h4>Solicitações de recuperação de senha</h4> -->
		<div>
			<?php
			if ($row_recSenha > 0) {
        //ver codigo para exibir mais de uma mensagem
				echo "<br>Mensagem de solicitação para recuperar senha<br>";
        echo "<Br><strong>Dados da Mensagem: </strong>";
        echo "<br>Matricula: " .$row_recSenha['matricula'];
        echo "<br>Nome: " .$row_recSenha['nome'];
        echo "<br>Email: " .$row_recSenha['email'];
        echo "<br>Titulo: " .$row_recSenha['titulo'];
        echo "<br>Mensagem: " .$row_recSenha['mensagem'];
        echo "<br><br> ";
			}else {
        echo "<br><h5 style='color:orange;'>Nenhuma mensagem de solicitação para recuperação de Senha!<h5>";
      }

			?>
		</div>
	<div>
		<a href="areaadm.php">Voltar</a>
	</div>
</div>
  </div>
</body>
</html>
