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

		<?php
		include 'conexao.php';
		$sql = "SELECT * FROM animais";
		$result = $conexao->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				$con1;
				if ($row['condicao1'] == 1) {
					$con1='Atendida';
				}
				else{
					$con1 = "Não Atendida";
				};

				$con2;
				if ($row['condicao2'] == 1) {
					$con2='Atendida';
				}
				else{
					$con2 = "Não Atendida";
				};

				$con3;
				if ($row['condicao3'] == 1) {
					$con3='Atendida';
				}
				else{
					$con3 = "Não Atendida";
				};
				echo "<tr>";
				echo "<td>" . $row['nFicha'] . "</td>";
				echo "<td>" . $row['dataRecebimento'] . "</td>";
				echo "<td>" . $row['agente'] . "</td>";
				echo "<td>" . $row['tipoRecolhimento'] . "</td>";
				echo "<td>" . $row['nomeEntregador'] . "</td>";
				echo "<td>" . $row['cpf_cnpj'] . "</td>";
				echo "<td>" . $row['telefone'] . "</td>";
				echo "<td>" . $row['endereco'] . "</td>";
				echo "<td>" . $row['municipio'] . "</td>";
				echo "<td>" . $row['cep'] . "</td>";
				echo "<td>" . $row['idDocumento'] . "</td>";
				echo "<td>" . $row['idUnidade'] . "</td>";
				echo "<td>" . $row['municipioProcedencia'] . "</td>";
				echo "<td>" . $row['uf'] . "</td>";
				echo "<td>" . $row['ultimaProcedencia'] . "</td>";
				echo "<td>" . $row['dieta'] . "</td>";
				echo "<td>" . $row['nomeComum'] . "</td>";
				echo "<td>" . $row['nomeCientifico'] . "</td>";
				echo "<td>" . $row['familia'] . "</td>";
				echo "<td>" . $row['ordem'] . "</td>";
				echo "<td>" . $row['codMarca'] . "</td>";
				echo "<td>" . $row['tipoMarca'] . "</td>";
				echo "<td>" . $row['situacao'] . "</td>";
				echo "<td>" . $row['periodoQuarentena'] . "</td>";
				echo "<td>" . $row['tipoDestinacao'] . "</td>";
				echo "<td>" . $row['subtipoDestinacao'] . "</td>";
				echo "<td>" . $con1 . "</td>";
				echo "<td>" . $con2 . "</td>";
				echo "<td>" . $con3 . "</td>";
				echo "<td>" . $row['idArea'] . "</td>";
				echo "</tr>";
			}
		}
		else{
 			echo "Dados não encontrados";
		}

	?>


		
	

	</table>

	


</body>
</html>
