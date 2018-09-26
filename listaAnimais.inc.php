
<?php

	$sql = "SELECT * FROM animais";
	$result = $conexao->query($sql);

	// date(“d/m/Y”, strtotime($row[data]));

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>" . $row['idAnimal'] . "</td>";
			echo "<td>" . $row['data'] . "</td>";
			// echo "<td>" . echo "date(“d/m/Y”, strtotime($row['data']));";	 . "</td>";
			echo "<td>" . $row['agente'] . "</td>";
			// echo "<td>" . $row['nomeCientifico'] . "</td>";
			echo "<td><a href='perfilAnimal.php?id=" . $row['idAnimal'] . "'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";
			echo "</tr>";
		}
	}


?>
