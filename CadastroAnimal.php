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
			<nav>
					<ul>
							<li><a href="ajuda.php" target="_blank">Ajuda</a></li>
               <!-- <br> <a href="areaadm.php">Sair</a>  -->
					</ul>
			</nav>

	<h3>Cadastro de Animais</h3>
	<div class="form_div">
			<form method="post" action="post_cadastro_animais.php">
        <h4>Dados  da Ficha e do Animal</h4>

				<p>Agente Recebedor:</p>
				<p><input type="text" name="agenteRecebedor" placeholder="Nome Completo" autofocus></p>

				<p>Tipo de Recolhimento:</p>
				<select  value="municipio Nao Selecionado" name="tipoRecolhimento" size=1>
					<option>Apreensão</option>
					<option>Resgate/Recolhimento</option>
					<option>Entrega Voluntária</option>
				</select><br><br>

<!-- <br><hr><br>  Linha Horizontal  -->

				 <!-- Dados do Entregador/Autuado  -->
				<h4> Dados do Entregador/Autuado</h4>
				<p>Nome:</p>
				<p><input type="text" name="nomeEntregador" placeholder="Nome Completo"></p>
				<p>CPF/CNPJ:</p>
				<p><input type="text" name="cpf_cnpj" placeholder="Insira o CPF/CNPJ"></p>
				<p>Telefone:</p>
				<p><input type="text" name="telefone" placeholder="Telefone"></p>
				<p>CEP:</p>
				<p><input type="text" name="cep" placeholder="CEP"></p>
				<p>Endereço Completo:</p>
				<p><input type="text" name="enderecoEntregador" placeholder="Bairro, Rua, Nº Lote,"></p>
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

<!-- <br><hr><br>  Linha Horizontal  -->

				<h4>Nº Auto infração/Nº Termo Apreensão/Depósito ou Nº Bol. de ocorrência:</h4s>
				<p><input type="text" name="autoTermoBoletim" placeholder="Nº Auto/Termo/Dep./Boletim"></p>
        Upload Documento Respectivo ao Nº Auto infração/Nº Termo Apreensão/Depósito ou Nº Bol. de ocorrência:
        <br><input type="file" name="uploadDoc" ><br>

<!-- <br><hr><br>  Linha Horizontal  -->

         <!-- Dados da Unidade Acolhedora -->
         <h4> Dados da Unidade Acolhedora</h4>
         <p>Selecione a Unidade:</p>
         <select type="menu" name="nomeUnidade" size=1>
           <option value="Unidade Nao Selecionada">Selecione a Unidade</option>
           <option>Inserir Cod.PHP</option>
           <option>Inserir Cod.PHP</option>
           <option>Inserir Cod.PHP</option>
         </select><br><br>

<!-- <br><hr><br>  Linha Horizontal  -->

          <!-- Dados do Animal  -->
          <h4> Dados do Animal</h4>
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
 				<p><input type="text"  name="nomeCientifico" placeholder="Nome Científico"><br><br>
        <p>Familia:</p>
        <p><input type="text" name="familiaAnimal" placeholder="Familia"></p>
        <p>Ordem:</p>
        <p><input type="text" name="ordemAnimal" placeholder="Nome Completo"></p>

<!-- <br><hr><br>  Linha Horizontal  -->

          <!-- Triagem de Animal  -->
          <h4> Triagem de Animal </h4>
           <h5>Identificação Taxonômica:</h5>
             <p>Código de Marcação:</p>
              <input type="text"  name="codMarca" placeholder="Código"><br>
             <p>Tipo de Marcação:</p>
              <input type="text"  name="tipoMarca" placeholder="Tipo"><br>
             <p>Local de Marcação:</p>
              <input type="text"  name="localMarca" placeholder="Local"><br>

<!-- <br><hr><br>  Linha Horizontal  -->

          <!-- Destinação de Animais  -->
        <h4> Destinação de Animais </h4>

        <p>Tipo de Destinação:</p>
        <select type="menu" name="tipoDestinacao" size=1>
          <option value="Tipo Nao Selecionado">Selecione o Tipo</option>
          <option>Quarentena</option>
          <option>Destinação Imediata</option>
          <option>Destinação Mediata</option>
        </select><br><br>



        <!--
          Quarentena
        <INPUT TYPE="checkbox" NAME="" VALUE="Quarentena"><strong>Quarentena:</strong>
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
               <select type="menu" name="subtipoDestinacao" size=1>
               <option value="Area Nao Selecionada">Selecione a Área</option>
               <option>Inserir Cod.PHP</option>
               <option>Inserir Cod.PHP</option>
               <option>Inserir Cod.PHP</option>
             </select><br><br>
          <p>Cativeiro:</p>
           <h6> Em caso de cativeiro o Agente deve diretamente definir a área de soltura.</h6>
            <p>Area de Soltura:</p>
            <select type="menu" name="SolturaCativeiro" size=1>
           <option value="Area Nao Selecionada">Selecione a Área</option>
           <option>Inserir Cod.PHP</option>
           <option>Inserir Cod.PHP</option>
           <option>Inserir Cod.PHP</option>
         </select><br><br>

          Destinação Mediata -------------------------------------
         <INPUT TYPE="checkbox" NAME="tipoDestinacao" VALUE="Destinação Mediata"><strong>Destinação Mediata:</strong>
          <br><INPUT TYPE="checkbox" NAME="subtipoDestinacao" VALUE="Soltura Experimental<br>">Soltura Experimental:
         <select type="menu" name="subtipoDestinacao" size=1>
            <option value="Area Nao Selecionada">Selecione a Área</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
          </select></p><br><br>

          <br><INPUT TYPE="checkbox" NAME="subtipoDestinacao" VALUE="Revigoramento Populacional<br>">Revigoramento Populacional:
         <select type="menu" name="subtipoDestinacao" size=1>
            <option value="Area Nao Selecionada">Selecione a Área</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
          </select></p><br><br>

         <br><INPUT TYPE="checkbox" NAME="subtipoDestinacao" VALUE="Reintrodução<br>">Reintrodução:
         <select type="menu" name="subtipoDestinacao" size=1>
            <option value="Area Nao Selecionada">Selecione a Área</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
          </select></p><br><br>

         <br><INPUT TYPE="checkbox" NAME="subtipoDestinacao" VALUE="Cativeiro<br>">Cativeiro:
         <select type="menu" name="subtipoDestinacao" size=1>
            <option value="Area Nao Selecionada">Selecione a Área</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
          </select></p><br><br>


          <br><INPUT TYPE="checkbox" NAME="subtipoDestinacao" VALUE="Pesquisa, Educação ou Treinamento<br>">Pesquisa, Educação ou Treinamento:

         <select type="menu" name="subtipoDestinacao" size=1>
            <option value="Area Nao Selecionada">Selecione a Área</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
            <option>Inserir Cod.PHP</option>
          </select></p><br><br>


<br><hr><br>  Linha Horizontal ------------------------------------


				<!--
                <p>Data e Hora:</p>
        				<p><input type="datetime-local" name="data"></p>
                 <p>Data:</p>
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

        <br><br><br><input type="submit" value="Salvar"></p>

			</form>
  </div>
</div>
	<footer></footer>
</body>
</html>
