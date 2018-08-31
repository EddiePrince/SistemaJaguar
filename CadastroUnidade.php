<?php
	//Erro de Validação W3C Identificado
	  //Conecção com Banco
	  include 'conexao.inc.php';
	  include 'verificausuario.inc.php';
	?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<title>Cadastro de Unidades</title>
	</head>

	<body>

		<?php
		include 'header.inc.php';

	?>
		<div id="pageAnimal" class="backgroundimgs">
			<div id="fundoTransparente">

	<div class="container">
				<form method="post" action="post_cadastro_unidades.php">
					<div class="container">
						<br><br><h3>Cadastro de Unidades</h3><br><br>
										<div class="row">
											<div class="col-md-2 mb-3">
												<label>Nome Da Unidade:</label>
												<input type="text" name="nomeUnidade" class="form-control" required>
											</div>

			          					<div class="col-md-4 mb-3">
														<p>Tipo da Unidade:</p>
														<select required class="form-control" name="tipoUnidade">
															<option value="">Selecione</option>
															<option value="Central">Central</option>
															<option value="Regional">Regional</option>
														</select>
													</div>

											<div class="col-md-6 mb-3">
												<p>CNPJ:</p>
												<input type="text" name="cnpj" class="form-control">
											</div>
										</div>
									</div>



									<div class="container">
										<div class="row">
										<div class="col-md-3 mb-3">
											<label>Telefone:</label>
											<input type="text" name="telefone" class="form-control">
										</div>
										<div class="col-md-3 mb-3">
											<label>UF:</label>
											<input class="form-control" type="text" name="uf" value="Tocantins" disabled="true">
										</div>
										<div class="col-md-3 mb-3">
											<label>Municipio:</label>
											<select required class="form-control" name="municipio">
												<option value="">Selecione o município</option>
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
										</div>
										<div class="col-md-3 mb-3">
											<label for="cc-expiration">CEP:</label>
											<input type="text" name="cep" class="form-control" id="cc-expiration">
										</div>
									</div>
									</div>

									<div class="container">
										<div class="row">
											<div class="col-md-4 mb-3">
												<label for="cc-cvv">Bairro:</label>
												<input type="text" name="bairro" class="form-control" id="cc-cvv">
											</div>
											<div class="col-md-2 mb-3">
												<label for="cc-expiration">Lote:</label>
												<input type="text" name="lote" class="form-control" id="cc-expiration">
											</div>
											<div class="col-md-6 mb-3">
												<label for="cc-cvv">Complemento:</label>
												<input type="text" name="complemento" class="form-control" id="cc-cvv">
											</div>
											<div class="col-md-3 mb-3">
												<input class="btn btn-default" name="submit" type="submit" value="Salvar">
											</div>
											<div id="msgField"></div>
										</div>
										</div>

								</div>
							</div>
						</div>

				</form>

			<div id="alerta">
        <div id="boxtop"></div>
        Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
        <button id="botao" onclick="apagar(); redirect();">OK</button>
      	</div>

      <div class="footer">
        <?php include 'footer.php';
        	  include 'verificarUnidades.inc.php';
        ?>
      </div>



	</body>

	</html>
