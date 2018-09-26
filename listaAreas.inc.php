<?php
//Conexão com Banco
  	include 'conexao.inc.php';


	$sql = "SELECT * FROM areas";
	$result = $conexao->query($sql);

	if($result->num_rows > 0){
	 while($row = $result->fetch_assoc())
	 {
			echo "<tr>";
	 		// echo "<td>" . $row['nomeProprietario'] . "</td>";
	 		// echo "<td>" . $row['municipio'] . "</td>";
	 		echo "<td>" . $row['nomePropriedade'] . "</td>";
	 		echo "<td>" . $row['bioma'] . "</td>";
      echo "<td>" . $row['distancia'] . "</td>";
      echo "<td>" . $row['observacoes'] . "</td>";
	 		echo "<td><a href='perfilArea.php?id=" . $row['idArea'] . "'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";
	 		echo "</tr>";
	 	}
	 }
	 else{
	 		echo "Dados não encontrados";
	 }

?>
