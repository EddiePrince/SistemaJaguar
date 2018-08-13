
<?php
	 $sql = "SELECT * FROM usuarios";
	 $result = $conexao->query($sql);
	
	 if($result->num_rows > 0){
	 	while($row = $result->fetch_assoc())
	 	{
	
	
	 		echo "<tr>";
	 		echo "<td>" . $row['nome'] . "</td>";
	 		echo "<td>" . $row['perfil'] . "</td>";
	 		echo "<td>" . $row['email'] . "</td>";
	 		echo "<td>" . $row['celular'] . "</td>";
	 		
	
	 		echo "</tr>";
	 	}
	 }
	 else{
	 		echo "Dados não encontrados";
	 }

?>
