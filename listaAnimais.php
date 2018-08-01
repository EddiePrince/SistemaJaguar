<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animais Cadastrados</title>
</head>
<body>
	<h1>Animais Cadastrados</h1>

	<?php
		include 'conexao.php'; 
		$sql = "SELECT * FROM animais";
		$result = $conexao->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				echo "Número da ficha: " . $row['numero']; 
			}
		}
		else{
 			echo "Dados não encontrados";
		}

	?>


</body>
</html>





