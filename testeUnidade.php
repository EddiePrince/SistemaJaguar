<?php
	//Erro de Validação W3C Identificado
	  //Conecção com Banco
	  include 'conexao.inc.php';
	$pegarUnidade = "SELECT * FROM unidades WHERE nome = 'Central Palmas'";
	$resultUnidade =  mysqli_query($conexao, $pegarUnidade);

	while($row = mysqli_fetch_row($resultUnidade))
	{
		$idUnidade = $row[0];
		echo $idUnidade;
	}

?>