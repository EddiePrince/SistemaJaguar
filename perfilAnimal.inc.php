<?php
	include 'conexao.inc.php';

	//Pegar id unidade pelo metodo get
  // $idTriagem= $_GET['idTriagem'];

  $sql = "SELECT * FROM dadostriagem";
  $result = mysqli_query($conexao, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

			$ultimaProcedencia = $row['ultimaProcedencia'];
	  	$nomeComum	= $row['nomeComum'];
	  	$familia	= $row['familia'];
	  	$ordem	= $row['ordem'];

    }
  }

?>
