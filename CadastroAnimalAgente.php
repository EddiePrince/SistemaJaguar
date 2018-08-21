<?php
	include 'post_cadastro_animais.php';
	include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Cadastro de Animais</title>
	</head>

	<body>
		<div id="pageAnimalAgente">
			<div class="container-fluid">
				<div class="logo_admin">
					<img src="img/logo.png" alt="Logo">
				</div>

				<div class="corpoAdm" id="corpoAdm">
					<div>

					<!-- Menu -->
					<!-- Erro de Validação W3C Identificado -->
					<?php include 'menuAgente.php'; ?>

				<form method="post" action="post_cadastro_animais.php">
					<div class="container theme-showcase" role="main">

						<br><br><h3>Cadastro de Animais</h3><br><br>
						<div>
							<!-- Abas de Navegação -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Dados da Ficha</a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dados do Entregador/Autuado</a></li>
								<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Seleção da Unidade</a></li>
								<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Dados do Animal</a></li>
							</ul>

							<!-- Conteúdo refente a cada aba de Navegação -->
							<div class="tab-content" role="tablist">

							<!-- Dados da Ficha -->
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="form_div">
									<br>
									<h4>Dados  da Ficha e do Animal</h4>
									<br>

									<div class="container">
										<div class="row">
											<div class="col-md-2 mb-3">
												<p>Número da Ficha:</p>
												<!-- Erro de Validação W3C Identificado -->
												<input class="form-control" type="number" disabled name="idAutomatico" value="<?php echo $idAutomatico ?>">
											</div>

											<div class="col-md-2 mb-3">
												<p>Data:</p>
												<!-- Erro de Validação W3C Identificado -->
												<input class="form-control" type="date" name="dataRecebimento">
											</div>

											<div class="col-md-5 mb-3">
												<p>Agente Recebedor:</p>
												<p><input class="form-control" type="text" name="nomeAgente" autofocus></p>
											</div>
										</div>
									</div>
									<hr>
								</div>
							</div>

								<!-- Dados do Entregador/Autuado  -->

							<div role="tabpanel" class="tab-pane" id="profile">
								<div class="form_div">
									<br>
									<h4>Dados do Entregador</h4>
									<br>

									<div class="container">
										<div class="row">
											<div class="col-md-3 mb-3">
												<p>Tipo de Recolhimento:</p>
												<select class="form-control" name="tipoEntrega" size=1>
													<option>Apreensão</option>
													<option>Resgate/Recolhimento</option>
													<option>Entrega Voluntária</option>
												</select><br><br>
											</div>

											<div class="col-md-5 mb-3">
												<p>Nome Entregador:</p>
												<p><input class="form-control" type="text" name="nomeEntregador"></p>
											</div>
										</div>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-md-3 mb-3">
												<p>CPF/CNPJ:</p>
												<p><input class="form-control" type="text" name="cpfEntregador"></p>
											</div>

											<div class="col-md-3 mb-3">
												<p>Telefone:</p>
												<p><input class="form-control" type="text" name="telefoneEntregador"></p>
											</div>
										</div>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-md-2 mb-3">
												<p>Unidade Federal:</p>
												<select class="form-control" name="uf">
												<option value="Estado Nao Selecionado">Selecione o Estado</option>
													<option value="TO">Tocantins</option>
												</select>
											</div>

											<div class="col-md-2 mb-3">
												<p>Municipio:</p>
												<select class="form-control" name="municipio">
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
											</div>
										</div>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-md-2 mb-3">
												<p>CEP:</p>
												<p><input class="form-control" type="text" name="cep"></p>
											</div>
											<div class="col-md-2 mb-3">
												<p>Bairro:</p>
												<p><input class="form-control" type="text" name="bairro"></p>
											</div>
											<div class="col-md-2 mb-3">
												<p>Lote:</p>
												<p><input class="form-control" type="text" name="lote"></p>
											</div>
											<div class="col-md-2 mb-3">
												<p>Complemento:</p>
												<p><input class="form-control" type="text" name="complemento"></p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3 mb-3">	
												<p>Tipo de Documento:</p>
												<select class="form-control" name="tipoDocumento" size=1>
													<option  value="Numero do Documento Nao Selecionado">Selecione</option>
													<option>Auto de Infração</option>
													<option>Termo de Apreensão/Depósito</option>
													<option>Boletim de Ocorrência</option>
												</select><br><br>
											</div>
										</div>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-md-4 mb-3">
												<p>Número do Documento:</p>
												<p><input class="form-control" type="text" name="nDocumento"></p>
											</div>

											<div class="col-md-2 mb-3">
												<p>Upload do Documento:</p>
												<input class="form-control" type="file" name="uploadDocumento"><br>
											</div>
										</div>
									</div>
								</div>
								<hr>
							</div>

								<!-- Dados da Unidade Acolhedora -->

							<div role="tabpanel" class="tab-pane" id="messages">
								<div class="form_div">
									<br>
										<h4> Dados da Unidade Acolhedora</h4>
									<br>
										<div class="container">
											<div class="row">
				          						<div class="col-md-4 mb-3">
													<p>Selecione a Unidade:</p>
													<select class="form-control" name="nomeUnidade" size=1>
														<option value="Unidade Nao Selecionada">Selecione a Unidade</option>
														<option>Inserir Cod.PHP</option>
														<option>Inserir Cod.PHP</option>
														<option>Inserir Cod.PHP</option>
													</select><br><br>
												</div>
											</div>
										</div>
										<br>
									</div>
									<br>
									<hr>
								</div>

								<!-- Dados do Animal  -->

								<div role="tabpanel" class="tab-pane" id="settings">
									<div class="form_div">
										<br>
										<h4> Dados do Animal</h4>
										<br>

										<div class="container">
											<div class="row">
		          								<div class="col-md-4 mb-3">
													<p>Local de última procedência:</p>
													<p><input class="form-control" type="text" name="procedencia"></p>
												</div>
												<div class="col-md-4 mb-3">
													<p>Dieta:</p>
													<p><input class="form-control" type="text" name="dieta"></p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-5 mb-3">
													<p>Nome comum:</p>
													<p><input class="form-control" type="text" name="nomeComum"></p>
												</div>
												<div class="col-md-5 mb-3">
													<p>Nome científico:</p>
													<p><input class="form-control" type="text" name="nomeCientifico"></p>
												</div>
											</div>

											<div class="row">
												<div class="col-md-3 mb-3">
													<p>Família:</p>
													<p><input class="form-control" type="text" name="familia"></p>
												</div>

												<div class="col-md-3 mb-3">
													<p>Ordem:</p>
													<p><input class="form-control" type="text" name="ordem"></p>
												</div>

												<div class="col-md-3 mb-3">
													<p>Código de marcação:</p>
													<p><input class="form-control" type="text" name="codMarcacao"></p>
												</div>

												<div class="col-md-5 mb-3">
													<p>Tipo de marcação:</p>
													<p><input class="form-control" type="text" name="tipoMarcacao"></p>
												</div>

												<div class="col-md-5 mb-3">
													<p>Local da marcação:</p>
													<p><input class="form-control" type="text" name="localMarcacao"></p>
												</div>
										</div>
									</div>
									<hr>
									<input class="btn btn-default" name="submit" type="submit" value=" Salvar "><br>
								</div>
							</div>
						</div>
					</div>
				</form>
				</div>
			 </div>
			 <!-- Erro de Validação W3C Identificado -->
			 <div class="footer">
				 <?php include 'footer.php'; ?>
			 </div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


	</body>

	</html>
