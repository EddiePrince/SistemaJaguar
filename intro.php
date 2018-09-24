<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<title>Ajuda</title>
</head>

<body>
	<div id="header">
		<a href="index.php"> 
			<img src="img/jaguaricon.png" alt="Logo" id="headerIcon">
		</a>  
		<span id="headerTitle">Sistema <span class="orangeTitle">Jaguar</span></span>

		<a id="indexLink" href="index.php">Login</a>
	</div>

	<div id="bannercontainer">	
		<div id="textcontainer">
			<h1>Bem vindo(a) ao SISTEMA <span id="orangeTitle">JAGUAR</span></h1> <br>
			<div id="subtextcontainer">
				<p>O Sistema Jaguar foi desenvolvido especialmente para o NATURATINS</p>
				<p>Desfrute de uma nova forma de gerenciamento de animais</p>
				<p>Verifique seu e-mail para as credenciais de acesso</p>	
			</div>
		</div>
		<img id="banner" src="img/banner.jpg">
	</div>

	<div id="contentcontainer" class="container">
		<div class="row">

			<div class="col-3">
				<img class="introimg" src="img/Arara.png">
				<p>Intuitivo</p>
				<p>O Sistema Jaguar foi criado de acordo com a realidade dos funcionários NATURATINS. Será fácil utilizar o sistema</p>
			</div>

			<div class="col-3">
				<img class="introimg" src="img/Onça.png">
				<p>Prático</p>
				<p>O Sistema Jaguar vai direto ao ponto e fornce exatamente as funções que você precisa</p>
			</div>

			<div class="col-3">
				<img class="introimg" src="img/Tamanduá.png">
				<p>Moderno</p>
				<p>Usamos as técnicas mais recentes para criar um sistema arrojado e moderno para os usuários</p>
			</div>

			<div class="col-3">
				<img class="introimg" src="img/Lobo.png">
				<p>Adaptável</p>
				<p>Leve o Sistema Jaguar com você para onde precisar. Funciona em diversas plataformas</p>
			</div>
		</div>
	</div>
				
	<div class="footer">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
