<?php include_once("conexao.php"); ?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/Estilo.css">
		<title>Solocitar Cadastro</title>
</head>
<body>
	<div id="wrapper">
		<h2>Solicitação de Cadastro</h2>
		<div class="form_div">
				<form method="post" action="">
					<p>Nome:</p>
					<p><input type="text" placeholder="Nome Completo"></p>
					<p>E-Mail:</p>
					<p><input type="text" placeholder="Seu Email"></p>
					<textarea type="text" rows="10" cols="30" maxlength="500">Favor me cadastrar”</textarea>
					<p><input type="submit" value="Solicitar ao Administrador"></p>
				</form>
			</div>
	</div>
	<div>
		<a href="index.php">Voltar</a>
	</div>

</body>
</html>
