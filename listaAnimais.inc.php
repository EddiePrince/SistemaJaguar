
<?php
	$sql = "SELECT * FROM animais";
	$result = $conexao->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>" . $row['idAnimal'] . "</td>";
			echo "<td>" . $row['data'] . "</td>";
			echo "<td>" . $row['agente'] . "</td>";
			echo "<td><a href='perfilAnimal.php?id=" . $row['idAnimal'] . "/'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";
			echo "</tr>";
		}
	}
	

?>
