<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/Estilo.css">
		<title>Recuperação de Senha</title>
</head>
<body>
	<div id="wrapper">
		<h2>Recuperação de Senha</h2>
		<div>
				<form method="post" action="#">
					<p>Nome:</p>
					<p><input type="text" name="nome" placeholder="Nome Completo"></p>
					<p>E-Mail:</p>
					<p><input type="email" name="email" placeholder="E-mail fornecido para a empresa"></p>
					<p>Título:</p>
					<textarea type="text" name="assunto"  maxlength="100">"Recuperação de Senha"</textarea>
					<p>Mensagem:</p>
					<textarea type="text" name="mensagem" rows="10" cols="30" maxlength="500">"Favor Atualize Minha Senha".</textarea>
					<p><input type="submit" value="Enviar ao Administrador"></p>
				</form>
			</div>
	</div>
	<div>
		<a href="index.php">Voltar</a>
	</div>

</body>
</html>
