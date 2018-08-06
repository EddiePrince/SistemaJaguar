<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>


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
		            <li><a href="ajuda.php">Ajuda</a></li>
		        </ul>
		    </nav>
        <div>
         <a href="areaadm.php"> <input type="button" name="btn" value="Voltar">  </a>
        </div>
		</dir>

		<div>
		<div>
	   <a href="index.php"> <img src="image/Logo_5.png" alt="Logo" class="logo"></a>
	  </div>
    <h2>Cadastro de Unidades</h2>

		<form method="post" action="post_cadastro_unidades.php">

	    <label><p>Nome Da Unidade:</p></label>
	    <input type="text" placeholder="Nome Da Unidade" name="nomeUnidade" required autofocus>
      <label><p>Tipo da Unidade:</p></label>
      <p>Selecione a Unidade:</p>
      <select type="menu" name="tipoUnidade" size=1  required>
        <option value="Tipo Nao Selecionado">Selecione o Tipo da Unidade</option>
        <option>Central</option>
        <option>Regional</option>
      </select><br><br>

	    <label><p>CNPJ:</p></label>
	    <input type="text" placeholder="CNPJ" name="cnpj" required>

			<label><p>CEP:</p></label>
			<input type="text" name="cep" placeholder="CEP">

      <p>Municipio:</p>
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

	    <label><p>Bairro:</p></label>
	    <input type="text" name="bairro" placeholder="Bairro" required>

	    <label><p>Rua:</p></label>
	    <input type="text" placeholder="Rua" name="rua" required>

			<label><p>Lote:</p></label>
			<input type="text" placeholder="Número" name="lote" required>

			<label><p>Complemento:</p></label>
			<textarea name="complemento"  placeholder="Complemento" rows="5" cols="40" required>
	  	</textarea><br>

	    <button type="submit">Cadastrar</button>
		</form>
	    </div>
	    </div>
	  </div>

	<footer>

	</footer>
</body>
</html>
