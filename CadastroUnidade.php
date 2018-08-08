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
				<input type="text" name="nomeUnidade" required autofocus>
				<label>Tipo da Unidade:</label>

				<p>Selecione a Unidade:</p>
				<select name="tipoUnidade">
          <option>Selecione o Tipo da Unidade</option>
          <option>Central</option>
          <option>Regional</option>
        </select><br>

				<label>CNPJ:</label>
				<input type="text" name="cnpj" required>

				<label>CEP:</label>
				<input type="text" name="cep">

				<label>Municipio:</label>
				<select name="municipio">
          <option value="Não Selecionado">Selecione o Municipio</option>
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

				<br>
				<label>Bairro:</label>
				<input type="text" name="bairro" required>

				<label>Rua:</label>
				<input type="text" name="rua" required>

				<label>Lote:</label>
				<input type="text" name="lote" required>

				<label>Complemento:</label>
				<textarea name="complemento" rows="5" cols="40" required>
  	  	</textarea><br>

				<button type="submit">Cadastrar</button>
			</form>
		</div>
	</div>
</body>

</html>