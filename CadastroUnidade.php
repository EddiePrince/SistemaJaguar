<?php
  //Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="br-pt">

<head>
	<meta charset="utf8mb4_unicode_ci">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
	<title>Cadastro de Unidades</title>
</head>

<body>
	<div id="pageUnidade">
		<div class="container-fluid">

			<div class="logo_admin">
				<img src="img/logo.png">
			</div>

			<div id="corpoAdm" class="corpoAdm" >
        <div>

					<!-- Menu -->
					<?php include 'menuAdm.php'; ?>
					<!-- Fim Menu -->

				<form method="post" action="post_cadastro_unidades.php"><br>
          			<h3>Cadastro de Unidades</h3><br>

					<label>Nome Da Unidade:</label>
					<input class="form-control" type="text" name="nomeUnidade"  autofocus>

					<label>CNPJ:</label>
					<input class="form-control" type="text" name="cnpj">


					<label>Tipo da Unidade:</label><br>
					<select class="form-control" name="tipoUnidade">
          				<option >Selecione o Tipo da Unidade</option>
          					<option>Central</option>
         		 		<option>Regional</option>
        			</select><br>

        			<p>Unidade Federal:</p>
						<select class="form-control" name="uf">
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

						<div class="endereco">
						<p>CEP:</p>
						<input class="form-control" type="text1" name="cep">

						<p>Bairro:</p>
						<input class="form-control" type="text1" name="bairro">

						<p>Lote:</p>
						<input class="form-control" type="text1" name="lote">

						<p>Complemento:</p>
						<input class="form-control" type="text1" name="complemento">
						</div>

					<input class="btn btn-default" id="salva" name="submit" type="submit" value="Salvar">
				</form>
			</div>
      </div>
      <div class="footer">
        <?php include 'footer.php'; ?>
      </div>
		</div>
	</div>

</body>

</html>
