<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/Estilo_Cadastro.css">
	<title>Cadastro</title>
</head>
<body>
	<div id="wrapper">

		<dir class="#">
		    <nav class="#">
		        <ul class="#">
		            <li><a href="#">Ajuda</a></li>
		        </ul>
		    </nav>
		</dir>

		<h2>Cadastro de Unidades</h2>
		<div class="form_div">
		<div class="imgcontainer">
	   <a href="index.php"> <img src="image/Logo_4.png" alt="Logo" class="logo"></a>
	  </div>

		<form method="post" action="post_cadastro_unidades.php">
	    <label for="cnpj"><p>CNPJ:</p></label>
	    <input type="text" placeholder="CNPJ" name="cnpj" required autofocus>

			<label for="cep"><p>CEP:</p></label>
			<input type="text" name="cep" placeholder="CEP">

		<p>Municipio:</p>
		<select name="municipio">
			<option value="municipio">Selecione o Municipio</option>
			<option value="Aguiarnópolis">Aguiarnópolis</option>
			<option value="Almas">Almas</option>
			<option value="Ananás">Ananás</option>
			<option value="Araguacema">Araguacema</option>
			<option value="Araguaína">Araguaína</option>
			<option value="Araguanã">Araguanã</option>
			<option value="Araguatins">Araguatins</option>
			<option value="Arraias">Arraias</option>
			<option value="Augustinópolis">Augustinópolis</option>
			<option value="Aurora do Tocantins">Aurora do Tocantins</option>
			<option value="Babaçulândia">Babaçulândia</option>
			<option value="Brejinho de Nazaré">Brejinho de Nazaré</option>
			<option value="Caseara">Caseara</option>
			<option value="Darcinópolis">Darcinópolis</option>
			<option value="Dianópolis">Dianópolis</option>
			<option value="Esperantina">Esperantina</option>
			<option value="Filadélfia">Filadélfia</option>
			<option value="Formoso do Araguaia">Formoso do Araguaia</option>
			<option value="Gurupi">Gurupi</option>
			<option value="Ipueiras">Ipueiras</option>
			<option value="Itaguatins">Itaguatins</option>
			<option value="Lagoa da Confusão">Lagoa da Confusão</option>
			<option value="Lajeado">Lajeado</option>
			<option value="Mateiros">Mateiros</option>
			<option value="Monte do Carmo">Monte do Carmo</option>
			<option value="Natividade">Natividade</option>
			<option value="Novo Acordo">Novo Acordo</option>
			<option value="Palmas">Palmas</option>
			<option value="Paraíso do Tocantins">Paraíso do Tocantins</option>
			<option value="Paranã">Paranã</option>
			<option value="Pau d'Arco">Pau d'Arco</option>
			<option value="Peixe">Peixe</option>
			<option value="Pium">Pium</option>
			<option value="Ponte Alta do Tocantins">Ponte Alta do Tocantins</option>
			<option value="Porto Nacional">Porto Nacional</option>
			<option value="Praia Norte">Praia Norte</option>
			<option value="Rio da Conceição">Rio da Conceição</option>
			<option value="Sampaio">Sampaio</option>
			<option value="São Bento do Tocantins">São Bento do Tocantins</option>
			<option value="São Félix do Tocantins">São Félix do Tocantins</option>
			<option value="São Sebastião do Tocantins">São Sebastião do Tocantins</option>
			<option value="Taguatinga">Taguatinga</option>
			<option value="Tocantinópolis">Tocantinópolis</option>
			<option value="Wanderlândia">Wanderlândia</option>
			<option value="Xambioá">Xambioá</option>
		</select>

	    <label for="bairro"><p>Bairro:</p></label>
	    <input type="text" placeholder="Bairro" name="bairro" required>

	    <label for="rua"><p>Rua:</p></label>
	    <input type="text" placeholder="Rua" name="rua" required>

			<label for="numero"><p>Número:</p></label>
			<input type="text" placeholder="Número" name="numero" required>

			<label for="complemento"><p>Complemento:</p></label>
			<textarea name="complemento"  placeholder="Complemento" rows="5" cols="40" required>
	  	</textarea>

	    <button type="submit">Cadastrar</button>
		</form>
	    </div>
	    </div>
	  </div>
	<div>
	 <a href="index.php"> <input type="button" name="btn" value="Voltar">  </a>
	</div>
	<footer>

	</footer>
</body>
</html>
