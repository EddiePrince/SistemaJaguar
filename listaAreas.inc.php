
<?php
	$sql = "SELECT * FROM areas";
	$result = $conexao->query($sql);

	$sql2 = "SELECT * FROM enderecos";
	$result2 = $conexao->query($sql2);



	if($result||$result2->num_rows > 0){
	 while($row = $result->fetch_assoc())
	 {
			echo "<tr>";
	 		echo "<td>" . $row['nomeProprietario'] . "</td>";
	 		echo "<td>" . $row['municipio'] . "</td>";
	 		echo "<td>" . $row['nomePropriedade'] . "</td>";
	 		echo "<td>" . $row['bioma'] . "</td>";
	 		// echo "<td><a href='perfilUnidade.php?id=" . $row['idUnidade'] . "'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";
	 		echo "</tr>";
	 	}
	 }
	 else{
	 		echo "Dados não encontrados";
	 }

?>
