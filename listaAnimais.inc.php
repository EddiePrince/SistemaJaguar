<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
  include 'verificausuario.inc.php';
?>

<?php
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
