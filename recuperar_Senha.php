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
				<form method="post" action="post_rec_senha.php">
					<p>Matrícula:</p>
					<p><input type="text" name="matricula" placeholder="Inserir a Matrícula" required></p>
					<p>Nome Completo:</p>
					<p><input type="text" name="nomeCompleto" placeholder="Digite seu Nome" required></p>
					<p>E-Mail:</p>
					<p><input type="email" name="email" placeholder="E-mail fornecido para a empresa" required></p>
					<p>Título:</p>
					<textarea type="text" name="titulo" value="Recuperação de Senha" maxlength="100" required>"Recuperação de Senha"</textarea>
					<p>Mensagem:</p>
					<textarea type="text" name="mensagem" value="Favor Atualize Minha Senha" rows="10" cols="30" maxlength="500" required>"Favor Atualize Minha Senha"</textarea>
					<p><input type="submit" value="Enviar ao Administrador"></p>
				</form>
			</div>
	</div>
	<div>
		<a href="index.php">Voltar</a>
	</div>

</body>
</html>
