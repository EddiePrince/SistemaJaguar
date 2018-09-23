<?php
//Conexão com Banco
  	include 'conexao.inc.php';


	$sql = "SELECT * FROM areas,proprietarios,enderecos";
	$result = $conexao->query($sql);

	// $sql3 = "SELECT * FROM proprietarios";
	// $result3 = $conexao->query($sql3);
  //
	// $sql2 = "SELECT * FROM enderecos";
	// $result2 = $conexao->query($sql2);



	if($result->num_rows > 0){
	 while($row = $result->fetch_assoc())
	 {
			echo "<tr>";
	 		echo "<td>" . $row['nomeProprietario'] . "</td>";
	 		echo "<td>" . $row['municipio'] . "</td>";
	 		echo "<td>" . $row['nomePropriedade'] . "</td>";
	 		echo "<td>" . $row['bioma'] . "</td>";
	 		echo "<td><a href='perfilArea.php?id=" . $row['idArea'] . "'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";
	 		echo "</tr>";
	 	}
	 }
	 else{
	 		echo "Dados não encontrados";
	 }

?>
