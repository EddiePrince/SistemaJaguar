
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animais Cadastrados</title>
</head>
<body>
	<h1>Animais Cadastrados</h1>

	<?php
		include 'conexao.php'; 
		$sql = "SELECT * FROM animais";
		$result = $conexao->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
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





