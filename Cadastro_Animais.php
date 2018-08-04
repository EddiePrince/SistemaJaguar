<?php

  include 'includes/conexao.php';
  include 'includes/verificausuario.php';

?>

    <!-- Fim do codigo validação usuario -->


<!DOCTYPE html>
<html lang="br-pt">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/Estilo1.css">
		<title>Cadastro de Animais</title>
</head>
<body>
	<!-- <dir class="menu">
		<img src="image/Logo_5.png">
		<h3>Cadastro do Animais</h3>
	</dir> -->
<div id="wrapper">

	<dir class="#">
			<nav class="#">
					<ul class="#">
							<li><a href="#">Ajuda</a></li>
					</ul>
			</nav>
	</dir>

	<h3>Cadastro de Animais</h3>
	<div class="form_div">
			<form method="post" action="post_cadastro_animais.php">
				<p>Data e Hora:</p>
				<p><input type="datetime-local" name="data"></p>
				<p>Agente Recebedor:</p>
				<p><input type="text" name="agente_recebedor" placeholder="Nome Completo"></p>

				<p>Tipo de Recolhimento:</p>
				<select type="menu" name="tipo_recolhimento" size=1>
					<option>Apreensão</option>
					<option>Resgate/Recolhimento</option>
					<option>Entrega Voluntária</option>
				</select><br><br>

				<p>Municipio de procedência:</p>
				<select name="municipio_procedencia">
					<option value="municipio Nao Selecionado">Selecione o Municipio</option>
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

				<p>UF:</p>
				<select name="uf">
					<option value="estado">Selecione o Estado</option>
					<option value="ac">Acre</option>
					<option value="al">Alagoas</option>
					<option value="am">Amazonas</option>
					<option value="ap">Amapá</option>
					<option value="ba">Bahia</option>
					<option value="ce">Ceará</option>
					<option value="df">Distrito Federal</option>
					<option value="es">Espírito Santo</option>
					<option value="go">Goiás</option>
					<option value="ma">Maranhão</option>
					<option value="mt">Mato Grosso</option>
					<option value="ms">Mato Grosso do Sul</option>
					<option value="mg">Minas Gerais</option>
					<option value="pa">Pará</option>
					<option value="pb">Paraíba</option>
					<option value="pr">Paraná</option>
					<option value="pe">Pernambuco</option>
					<option value="pi">Piauí</option>
					<option value="rj">Rio de Janeiro</option>
					<option value="rn">Rio Grande do Norte</option>
					<option value="ro">Rondônia</option>
					<option value="rs">Rio Grande do Sul</option>
					<option value="rr">Roraima</option>
					<option value="sc">Santa Catarina</option>
					<option value="se">Sergipe</option>
					<option value="sp">São Paulo</option>
					<option value="to">Tocantins</option>
				</select>

				<p>Nome Comum:</p>
				<p><input type="text"  name="nome_comum" placeholder="Nome Comum"><br><br>
				<p>Nome Científico:</p>
				<p><input type="text"  name="nome_cientifico" placeholder="Nome Científico"><br><br>
				<p>Local de Ultima Procedência do Espécime:</p>
				<p><input type="text" name="local_procedencia"  placeholder="Local"></p>
				<p>Dieta:</p>
				<p><input type="text"  name="dieta" placeholder="Dieta"><br><br>
					<p><input type="submit" value="Salvar"></p>
				<!-- Dados do Entregador/Autuado -->
				<!-- <h3> Dados do Entregador/Autuado</h3><br>
				Nome:
				<p><input type="text" name="nome_ent_aut" placeholder="Nome Completo"></p>
				<p>CPF/CNPJ:</p>
				<p><input type="text" name="cpf_cnpj_ent_aut" placeholder="Insira o CPF/CNPJ"></p>
				<p>telefone:</p>
				<p><input type="text" name="telefone_ent_aut" placeholder="Telefone"></p>
 -->


				<!-- <p>Data:</p>
				<p><input type="date" name="data" min="1950-12-31" max="2100-12-31"></p>
				<p>Mês e Ano:</p>
				<p><input type="month" name="hora" ></p>
				<p>Semana:</p>
				<p><input type="week" name="semana" ></p>
				<p>Hora:</p>
				<p><input type="time" name="hora" ></p>
				<input type="radio" name="entendeu" value="teste">
				<input type="radio" name="entendeu" value="teste">
				<input type="radio" name="entendeu" value="teste"><br><br> -->



				<!-- CONTINUAR DAQUI -->
				<!-- <p>Tipo de Recolhimento:</p>
				<select type="menu" name="menu" size=1>
					<option>Apreensão</option>
					<option>Resgate/Recolhimento</option>
					<option>Entrega Voluntária</option>
				</select><br><br>
				<input type="radio" name="entendeu" value="teste">
				<input type="radio" name="entendeu" value="teste">
				<input type="radio" name="entendeu" value="teste"> -->

			</form>
  </div>
</div>
	<footer></footer>
</body>
</html>
