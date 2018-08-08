<?php
  //Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="br-pt">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
	<title>Cadastro</title>
</head>

<body>
	<div id="page">
		<div>
			<div>
				<a href="ajuda.php">Ajuda</a>
				<a href="index.php">Voltar</a><br>
				<a href="areaadm.php"> <img src="image/Logo.png" alt="Logo" class="logo"></a><br>
			</div>

			<h2>Cadastro de Unidades</h2>
			<form method="post" action="post_cadastro_unidades.php">

				<label>Nome Da Unidade:</label>
				<input type="text" name="nome" required autofocus>

        <label>CNPJ:</label>
        <input type="text" name="cnpj" required>

				<label>Tipo da Unidade:</label><br>
				<select name="tipoUnidade">
          <option>Selecione o Tipo da Unidade</option>
          <option>Central</option>
          <option>Regional</option>
        </select><br>

				<button type="submit">Cadastrar</button>
			</form>
		</div>
	</div>
</body>

</html>
