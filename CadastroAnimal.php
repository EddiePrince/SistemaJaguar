<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style/bootstrap.min.css">
<meta charset="utf-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Animais</title>
<link href="style/bootstrap2.min.css" rel="stylesheet">
</head>
<body>

	<div class="imgcontainer">
		<img src="img/Logo.png" alt="Logo" class="logo" height="150" width="200">
	</div>

	<div class="container theme-showcase" role="main">
		<nav>
			<ul>
				<li><a href="ajuda.php" target="_blank">Ajuda</a></li>
				 <!-- <br> <a href="areaadm.php">Sair</a>  -->
			</ul>
		</nav>

	<h3>Cadastro de Animais</h3>

	<div>
    	<!-- Abas de Navegação -->
 		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Dados da Ficha</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dados do Entregador/Autuado</a></li>
			<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Seleção da Unidade</a></li>
			<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Dados do Animal</a></li>
			<li role="presentation"><a href="#tipo" aria-controls="tipo" role="tab" data-toggle="tab">Destinação de Animais</a></li>
			<li role="presentation"><a href="#detalhes" aria-controls="detalhes" role="tab" data-toggle="tab">Triagem de Animal</a></li>
			<li role="presentation"><a href="#destinacao" aria-controls="destinacao" role="tab" data-toggle="tab">Tipo de Destinação</a></li>
		</ul>

		<!-- Conteúdo refente a cada aba de Navegação -->
		<div class="tab-content" role="tablist">
			<div role="tabpanel" class="tab-pane active" id="home">
				<form method="post" action="post_cadastro_animais.php">
					<div class="form_div">
						<h4>Dados  da Ficha e do Animal</h4>
							<p>Número da Ficha:</p>
							<input type="text" name="idAnimal" value="" placeholder="Mostrar numero da ficha">
							
							<p>Data:</p>
							<input type="text" name="idAnimal" value="" placeholder="Mostrar data atual">

							<p>Agente Recebedor:</p>
							<p><input type="text" name="agenteRecebedor" placeholder="Mostrar nome do usuário logado" autofocus></p>

							<hr>

							<a href="#profile"  aria-controls="profile" role="tab" data-toggle="tab">Próximo</a>
					</div><br>
			</div>

			<div role="tabpanel" class="tab-pane" id="profile">

				<!-- Dados do Entregador/Autuado  -->
				<h4>Dados do Entregador</h4>

				<p>Tipo de Recolhimento:</p>
				<select name="tipoRecolhimento" size=1>
					<option>Apreensão</option>
					<option>Resgate/Recolhimento</option>
					<option>Entrega Voluntária</option>
				</select><br><br>

				<p>Nome Entregador:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" ></p>

				<p>CPF/CNPJ:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo"></p>

				<p>Telefone:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" ></p>

				<p>Unidade Federal:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" ></p>

				<p>Municipio:</p>
				<select name="municipioEntregador">
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
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo"></p>

				<p>Bairro:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo"></p>

				<p>Lote:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" ></p>

				<p>Complemento:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" ></p>

				<p>Tipo de Documento:</p>
				<select name="tipoRecolhimento" size=1>
					<option  value="Numero do Documento Nao Selecionado">Selecione</option>
					<option>Auto de Infração</option>
					<option>Termo de Apreensão/Depósito</option>
					<option>Boletim de Ocorrência</option>
				</select><br><br>

				<p>Número do Documento:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" ></p>

				<p>Upload do Documento:</p>
	    		<input type="file" name="uploadDoc" ><br>
				<a href="#messages"  aria-controls="messages" role="tab" data-toggle="tab">Próximo</a>
				</div><br><br>

			<div role="tabpanel" class="tab-pane" id="messages">
				<!-- Dados da Unidade Acolhedora -->
		        <h4> Dados da Unidade Acolhedora</h4>
		        <p>Selecione a Unidade:</p>
		        <select name="nomeUnidade" size=1>
			        <option value="Unidade Nao Selecionada">Selecione a Unidade</option>
		            <option>Inserir Cod.PHP</option>
		            <option>Inserir Cod.PHP</option>
		            <option>Inserir Cod.PHP</option>
		        </select><br><br>
			</div><br><br>

			<div role="tabpanel" class="tab-pane" id="settings">
				<!-- Dados do Animal  -->
			    <h4> Dados do Animal</h4>
			    <p>Local de última procedência do espécime</p>
			    <p>Municipio de Procedência:</p>
			    <select name="municipioProcedencia">
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
							         <select name="ufProcedencia" >
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
							         <p>Local de Ultima Procedência do Espécime:</p>
							         <p><input type="text" name="locUltimaProcedencia"  placeholder="Local de Procedência do Espécime"></p>
							         <p>Dieta:</p>
							         <p><input type="text"  name="dieta" placeholder="Dieta"><br><br>
							 				<p>Nome Comum:</p>
							 				<p><input type="text"  name="nomeComum" placeholder="Nome Comum"><br><br>
							 				<p>Nome Científico:</p>
											<input type="text"  name="nomeCientifico" placeholder="Nome Científico"><br><br>
							        <p>Familia:</p>
							        <p><input type="text" name="familiaAnimal" placeholder="Familia"></p>
							        <p>Ordem:</p>
							        <p><input type="text" name="ordemAnimal" placeholder="Nome Completo"></p>
					</div><br><br>

					<div role="tabpanel" class="tab-pane" id="tipo">

							          <!-- Triagem de Animal  -->
							          <h4> Triagem de Animal </h4>
							           <h5>Identificação Taxonômica:</h5>
							             <p>Código de Marcação:</p>
							              <input type="text"  name="codMarca" placeholder="Código"><br>
							             <p>Tipo de Marcação:</p>
							              <input type="text"  name="tipoMarca" placeholder="Tipo"><br>
							             <p>Local de Marcação:</p>
							              <input type="text"  name="localMarca" placeholder="Local"><br>
					</div><br><br>

					<div role="tabpanel" class="tab-pane" id="detalhes">

							          <!-- Triagem de Animal  -->
												nada inserido ainda
					</div><br><br>

					<div role="tabpanel" class="tab-pane" id="destinacao">
					          <!-- Destinação de Animais  -->
					        <h4> Destinação de Animais </h4>

					        <p>Tipo de Destinação:</p>
					        <select name="tipoDestinacao" size=1>
					          <option value="Tipo Nao Selecionado">Selecione o Tipo</option>
					          <option>Quarentena</option>
					          <option>Destinação Imediata</option>
					          <option>Destinação Mediata</option>
					        </select><br><br>
						Quarentena<br><br><br><br>
	        <INPUT TYPE="checkbox" VALUE="Quarentena"><strong>Quarentena:</strong>
	          <p>Período de Isolamento:</p>
	            <input type="text"  name="periodoQuarentena" placeholder="Período"><br><br>

	              Destinação Imediata
	            <INPUT TYPE="checkbox" NAME="tipoDestinacao" VALUE="Destinação Imediata"><strong>Destinação Imediata:</strong>
	              <p>Soltura:</p>
	              <h6>Em caso de soltura o Agente deve marcar a checklist.</h6>
	             <INPUT TYPE="checkbox" NAME="condicao1" VALUE="O animal apresenta indícios comportamentais de que foi recém capturado"> O animal apresenta indícios comportamentais de que foi recém capturado;
	             <br><INPUT TYPE="checkbox" NAME="condicao2" VALUE="O animal não apresenta problemas que indiquem impedir sua sobrevivência ou a adaptação em vida livre"> O animal não apresenta problemas que indiquem impedir sua sobrevivência ou a adaptação em vida livre;
	             <br><INPUT TYPE="checkbox" NAME="condicao3" VALUE="O animal é de espécie de ocorrência natural no local"> O animal é de espécie de ocorrência natural no local.
	               <p>Area de Soltura:</p>
	               <select name="subtipoDestinacao" size=1>
	               <option value="Area Nao Selecionada">Selecione a Área</option>
	               <option>Inserir Cod.PHP</option>
	               <option>Inserir Cod.PHP</option>
	               <option>Inserir Cod.PHP</option>
	             </select><br><br>
	          <p>Cativeiro:</p>
	           <h6> Em caso de cativeiro o Agente deve diretamente definir a área de soltura.</h6>
	            <p>Area de Soltura:</p>
	            <select name="SolturaCativeiro" size=1>
	           <option value="Area Nao Selecionada">Selecione a Área</option>
	           <option>Inserir Cod.PHP</option>
	           <option>Inserir Cod.PHP</option>
	           <option>Inserir Cod.PHP</option>
	         </select><br><br><br><br>
					 	</div>
				 </form>

			</div>
		</div>
		</div>
					


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


</body>
</html>
