
<?php
	 $sql = "SELECT * FROM unidades";
	$result = $conexao->query($sql);
	
	if($result->num_rows > 0){
	 while($row = $result->fetch_assoc())
	 {
			echo "<tr>";
	 		echo "<td>" . $row['nome'] . "</td>";
	 		echo "<td>" . $row['tipoUnidade'] . "</td>";
	 		echo "</tr>";
	 	}
	 }
	 else{
	 		echo "Dados não encontrados";
	 }

?>
