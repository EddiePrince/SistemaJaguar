<!DOCTYPE html>
<html lang="br-pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Recuperação de Senha</title>
	</head>
	<body>

		<div id="page">
			<div class="container-fluid">

				<div class="logo_admin">
					<img src="img/logo.png" alt="Logo">
				</div>

				<div class="container">
					<div class="corpoAdm" id="corpoAdm">
						<div>

							<h2>Recuperação de Senha</h2>
							<div>
								<form method="post" action="post_rec_senha.php">
									<p>Matrícula:</p>
									<p><input class="form-control" type="text" name="matricula" required></p>
									<p>Nome Completo:</p>
									<p><input class="form-control" type="text" name="nome" required></p>
									<p>E-Mail:</p>
									<p><input class="form-control" type="email" name="email" placeholder="E-mail fornecido para a empresa" required></p>
									<p>Título:</p>
									<textarea class="form-control" type="text" name="titulo" value="Recuperação de Senha" required>"Recuperação de Senha"</textarea>
									<p>Mensagem:</p>
									<textarea class="form-control" type="text" name="mensagem" value="Favor Atualize Minha Senha" rows="5" required>"Favor Atualize Minha Senha"</textarea><br>
									<p><input class="btn btn-default"  type="submit" value="Enviar ao Administrador"></p><br>
									<a href="index.php">Voltar</a><br><br><br>
								</form>
							</div>
						</div>
					</div>
					<div class="footer">
						<?php include 'footer.php'; ?>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
