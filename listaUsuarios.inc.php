
<?php
  include 'conexao.inc.php';

	 $sql1 = "SELECT * FROM usuarios ";
	 $result1 = $conexao->query($sql1);

	 if($result1->num_rows > 0)
	 {
	 	while($row = $result1->fetch_assoc())
		 {

		 		echo "<tr>";

		 		echo "<td>" . $row['matricula'] . "</td>";
		 		echo "<td>" . $row['nome'] . "</td>";
		 		echo "<td>" . $row['perfil'] . "</td>";
		 		echo "<td>" . $row['email'] . "</td>";
		 		// $idTelefone = $row['idTelefone'];
		 		// $idUnidade = $row['idUnidade'];
        echo "<td><a href='perfilUsuario.php?id=" . $row['idUsuario'] . "'>" ."<img class='linkicon' src='img/linkicon.png'></a></td>";

		 		// if ($idTelefone == NULL) { //Somente o telefone é opcional por isso pode ser nulo
		 		// 	echo "<td>Telefone não informado</td>";
		 		// }
		 		// else if ($idTelefone != NULL) {
			 	// 	$sql2 = "SELECT * FROM telefones WHERE idTelefone = '$idTelefone'";
			 	// 	$result2 = $conexao->query($sql2);

		 		// 	while($row = mysqli_fetch_row($result2))
		 		// 	{
		 		// 		$numero = $row[1];
		 		// 		echo "<td>" . $numero . "</td>";
		 		// 	}
		 		// }

		 		// if ($idUnidade == NULL) { // Em caso de usuários teste sem unidade
		 		// 	echo "<td>Unidade não informada</td>";
		 		// }
		 		// else if($idUnidade != NULL){
			 	// 	$sql3 = "SELECT * FROM unidades WHERE idUnidade = '$idUnidade'";
				 // 	$result3 = $conexao->query($sql3);
			 	// 	while($row = mysqli_fetch_row($result3))
			 	// 	{
			 	// 		$nomeUnidade = $row[1];
			 	// 		echo "<td>" . $nomeUnidade . "</td>";
			 	// 	}
		 		// }

		 		echo "</tr>";
		   }
	 }

?>
