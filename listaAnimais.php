<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animais Cadastrados</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<h1>Animais Cadastrados</h1>

	<table>
		<tr>
			<th>Número da Ficha</th>
			<th>Data de Recebimento</th>
			<th>Agente</th>
			<th>Tipo de Recolhimento</th>
			<th>Nome do Entregador</th>
			<th>CPF/CNPJ</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>Município</th>
			<th>CEP</th>
			<th>ID Documento</th>
			<th>ID Unidade</th>
			<th>Município de Procedência</th>
			<th>UF</th>
			<th>Última Procedência</th>
			<th>Dieta</th>
			<th>Nome Comum</th>
			<th>Nome Científico</th>
			<th>Família</th>
			<th>Ordem</th>
			<th>Código da Marcação</th>
			<th>Tipo de Marcação</th>
			<th>Local da Marcação</th>
			<th>Período em Quarentena</th>
			<th>Tipo da Destinação</th>
			<th>Subtipo da Destinação</th>
			<th>Condição 1</th>
			<th>Condição 2</th>
			<th>Condição 3</th>
			<th>ID Área</th>
		</tr>
		<tr>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>
			<td>teste</td>

		</tr>
	</table>

	<?php
	 header("Content-Type: text/html; charset=utf-8",true);
		include 'conexao.php';
		$sql = "SELECT * FROM animais";
		$result = $conexao->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				echo "<p> : " . $row['nFicha'] . "</p>";
				echo "Número da ficha: " . $row['nFicha'] . " | ";
				echo "Data de Recebimento: " . $row['dataRecebimento'] . " | ";
				echo "Agente: " . $row['agente'] . " | ";
				echo "Tipo de Recolhimento: " . $row['tipoRecolhimento'] . " | ";
				echo "Nome do Entregador: " . $row['nomeEntregador'] . " | ";
				echo "CPF/CNPJ: " . $row['cpf_cnpj'] . " | ";
				echo "Telefone: " . $row['telefone'] . " | ";
				echo "Endereço: " . $row['endereco'] . " | ";
				echo "Município: " . $row['municipio'] . " | ";
				echo "CEP: " . $row['cep'] . " | " ;
				echo "Documento: " . $row['idDocumento'] . " | ";
				echo "Unidade: " . $row['idUnidade'] . " | ";
				echo "Município de Procedência: " . $row['municipioProcedencia'] . " | ";
				echo "UF: " . $row['uf'] . " | ";
				echo "Última Procedência: " . $row['ultimaProcedencia'] . " | ";
				echo "Dieta: " . $row['dieta'] . " | ";
				echo "Nome Comum: " . $row['nomeComum'];
				echo "Nome Científico: " . $row['nomeCientifico'] . " | ";
				echo "Família: " . $row['familia'] . " | ";
				echo "Ordem: " . $row['ordem'] . " | ";
				echo "Código da Marcação: " . $row['codMarca'] . " | ";
				echo "Tipo de Marcação: " . $row['tipoMarca'] . " | ";
				echo "Situação: " . $row['situacao'] . " | ";
				echo "Período de Quarentena: " . $row['periodoQuarentena'] . " | ";
				echo "Tipo de Destinação: " . $row['tipoDestinacao'] . " | ";
				echo "Subtipo de Destinação: " . $row['subtipoDestinacao'] . " | ";
				echo "Condição 1: " . $row['condicao1'] . " | ";
				echo "Condição 2: " . $row['condicao2'] . " | ";
				echo "Condição 3: " . $row['condicao3'] . " | ";
				echo "ID da Área de Soltura: " . $row['idArea'] . "<br> <br>";
			}
		}
		else{
 			echo "Dados não encontrados";
		}

	?>


</body>
</html>
