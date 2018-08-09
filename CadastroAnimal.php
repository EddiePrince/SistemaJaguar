<?php
	include 'post_cadastro_animais.php';
	include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Animais</title>
	<link href="style/bootstrapv3.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
</head>

<body>


	<div class="imgcontainer">
		<img src="img/Logo.png" alt="Logo" class="logo" height="150" width="200">
	</div>
	<form method="post" action="post_cadastro_animais.php">
		<div class="container theme-showcase" role="main">

			<h3>Cadastro de Animais</h3>

			<div>
				<!-- Abas de Navegação -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Dados da Ficha</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dados do Entregador/Autuado</a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Seleção da Unidade</a></li>
					<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Dados do Animal</a></li>
				</ul>

				<!-- Conteúdo refente a cada aba de Navegação -->

				<div class="tab-content"  role="tablist">

					<!-- Dados da Ficha -->

					<div role="tabpanel" class="tab-pane active" id="home">
						<div class="form_div">
							<h4>Dados  da Ficha e do Animal</h4>
							<p>Número da Ficha:</p>
							<input type="number" disabled name="idAutomatico" value="<?php echo $idAutomatico ?>">

							<p>Data:</p>
							<input type="date" name="dataRecebimento" required="true">

							<p>Agente Recebedor:</p> 
							<p><input type="text" name="nomeAgente" autofocus></p>
							<hr>
							<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Próximo</a>
						</div>
					</div>

					<!-- Dados do Entregador/Autuado  -->

					<div role="tabpanel" class="tab-pane" id="profile">
						<div class="form_div">
							<h4>Dados do Entregador</h4>
							<p>Tipo de Recolhimento:</p>
							<select name="tipoEntrega" size=1>
								<option>Apreensão</option>
								<option>Resgate/Recolhimento</option>
								<option>Entrega Voluntária</option>
							</select><br><br>

							<p>Nome Entregador:</p>
							<p><input type="text" name="nomeEntregador"></p>

							<p>CPF/CNPJ:</p>
							<p><input type="text" name="cpfEntregador"></p>

							<p>Telefone:</p>
							<p><input type="text" name="telefoneEntregador"></p>

							<p>Unidade Federal:</p>
							<select name="uf">
							<option value="Estado Nao Selecionado">Selecione o Estado</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AM">Amazonas</option>
									<option value="AP">Amapá</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RO">Rondônia</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SE">Sergipe</option>
									<option value="SP">São Paulo</option>
									<option value="TO">Tocantins</option>
							</select>

							<p>Municipio:</p>
							<select name="municipio">
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
					</select><br>

							<p>CEP:</p>
							<p><input type="text" name="cep"></p>

							<p>Bairro:</p>
							<p><input type="text" name="bairro"></p>

							<p>Lote:</p>
							<p><input type="text" name="lote"></p>

							<p>Complemento:</p>
							<p><input type="text" name="complemento"></p>

							<p>Tipo de Documento:</p>
							<select name="tipoDocumento" size=1>
						<option  value="Numero do Documento Nao Selecionado">Selecione</option>
						<option>Auto de Infração</option>
						<option>Termo de Apreensão/Depósito</option>
						<option>Boletim de Ocorrência</option>
					</select><br><br>

							<p>Número do Documento:</p>
							<p><input type="text" name="nDocumento"></p>

							<p>Upload do Documento:</p>
							<input type="file" name="uploadDocumento"><br>
							<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Próximo</a>
						</div>
					</div>

					<!-- Dados da Unidade Acolhedora -->

					<div role="tabpanel" class="tab-pane" id="messages">
						<div class="form_div">
							<h4> Dados da Unidade Acolhedora</h4>
							<p>Selecione a Unidade:</p>
							<select name="nomeUnidade" size=1>
										<option value="Unidade Nao Selecionada">Selecione a Unidade</option>
											<option>Inserir Cod.PHP</option>
											<option>Inserir Cod.PHP</option>
											<option>Inserir Cod.PHP</option>
									</select><br><br>
						</div>
					</div>

					<!-- Dados do Animal  -->

					<div role="tabpanel" class="tab-pane" id="settings">
						<div class="form_div">
							<h4> Dados do Animal</h4>
							<p>Local de última procedência:</p>
							<p><input type="text" name="procedencia"></p>

							<p>Dieta:</p>
							<p><input type="text" name="dieta"></p>

							<p>Nome comum:</p>
							<p><input type="text" name="nomeComum"></p>

							<p>Nome científico:</p>
							<p><input type="text" name="nomeCientifico"></p>

							<p>Família:</p>
							<p><input type="text" name="familia"></p>

							<p>Ordem:</p>
							<p><input type="text" name="ordem"></p>

							<p>Código de marcação:</p>
							<p><input type="text" name="codMarcacao"></p>

							<p>Tipo de marcação:</p>
							<p><input type="text" name="tipoMarcacao"></p>

							<p>Local da marcação:</p>
							<p><input type="text" name="localMarcacao"></p>
						</div>
						<input type="submit" value="Salvar">
					</div>
				</div>
			</div>
		</div>
	</form>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>


</body>

</html>
