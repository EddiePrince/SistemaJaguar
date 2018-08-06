<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<title>Recuperação de Senha</title>
</head>
<body>
	<div id="wrapper">
		<h2>Recuperação de Senha</h2>
		<div>
				<form method="post" action="adm_rec_senha.php">
					<p>Nome:</p>
					<p><input type="text" name="nome" placeholder="Nome Completo"></p>
					<p>E-Mail:</p>
					<p><input type="email" name="email" placeholder="E-mail fornecido para a empresa"></p>
					<p>Título:</p>
					<textarea type="text" name="titulo" value="Recuperação de Senha" maxlength="100">"Recuperação de Senha"</textarea>
					<p>Mensagem:</p>
					<textarea type="text" name="mensagem" value="Favor Atualize Minha Senha" rows="10" cols="30" maxlength="500">"Favor Atualize Minha Senha"</textarea>
					<p><input type="submit" value="Enviar ao Administrador"></p>
				</form>
			</div>
	</div>
	<div>
		<a href="index.php">Voltar</a>
	</div>

</body>
</html>
