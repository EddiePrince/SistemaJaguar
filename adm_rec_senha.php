<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<title>Recuperação de Senha</title>
</head>
<body>
	<?php include_once("conexao.inc.php");
	$result_recSenha = "SELECT * FROM recuperacaoSenha";
	$resultado_recSenha = mysqli_query($conexao, $result_recSenha);
	$row_recSenha = mysqli_fetch_assoc($resultado_recSenha);
	//$linhas = mysqli_num_rows($row_recSenha);
	?>
	<div id="wrapper">
		<h4>Solicitações de recuperação de senha</h4>
		<div>
			<?php
			if ($linhas > 0) {
				echo "Você tem uma solicitação aqui";
			 	echo $row_recSenha['nome'];
		 		echo "<br>";
		 		echo $row_recSenha['Email'];
		 		echo "<br>";
			 	echo $row_recSenha['titulo'];
			 	echo "<br>";
			 	echo $row_recSenha['mensagem'];
			 	echo "<br>";
			}
			?>
		</div>
	</div>
	<div>
		<a href="index.php">Voltar</a>
	</div>

</body>
</html>
