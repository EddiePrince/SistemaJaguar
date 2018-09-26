
<?php
	include 'conexao.inc.php';

	$sql55 = "SELECT * FROM unidades";
	$result55 = $conexao->query($sql55);

	if($result55->num_rows > 0)
	{
	 while($row = $result55->fetch_assoc())
	 {
			echo "<tr>";
	 		echo "<td>" . $row['nome'] . "</td>";
	 		echo "<td>" . $row['tipoUnidade'] . "</td>";
	 		echo "<td><a href='perfilUnidade.php?id=" . $row['idUnidade'] . "'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";
	 		echo "</tr>";
	 	}
	 }
	 else{
	 		echo "Dados não encontrados";
	 }

?>
