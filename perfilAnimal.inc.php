<?php
	include 'conexao.inc.php';

	//Pegar id unidade pelo metodo get
  // $idTriagem= $_GET['idTriagem'];

  $sql = "SELECT * FROM dadostriagem";
  $result = mysqli_query($conexao, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

	  	$codMarcacao	= $row['codMarcacao'];
	  	$tipoMarcacao	= $row['tipoMarcacao'];
	  	$localMarcacao	= $row['localMarcacao'];
	  	$nomeComum	= $row['nomeComum'];
			// $nomeCientifico = $row['nomeCientifico'];
	  	// $familia	= $row['familia'];
	  	// $ordem	= $row['ordem'];
			$ultimaProcedencia = $row['ultimaProcedencia'];

    }
  }

?>
