<?php
//Conexão com Banco

  	include 'conexao.inc.php';
	include 'validarlogin.inc.php'; //É onde o id do usuário é salvo na sessão


	//Criar idAutomático
  	$getAnimalId = "SELECT MAX(idAnimal) FROM animais";
  	$getAnimalIdresult = mysqli_query($conexao, $getAnimalId);

 	while($row =mysqli_fetch_row($getAnimalIdresult))
	{
		$idAutomatico = $row[0]+1;
	}


	if (isset($_POST['submit'])) {	//A variável $_SESSION não funciona dentro desse if

    $idAnimal = $_POST['idAnimal'];
		$agenteRecebedor = $nome;
		$data = $_POST['data'];
		$tipoRecolhimento = $_POST['tipoEntrega'];
		$nomeEntregador = $_POST['nomeEntregador'];
		$unidade = $_POST['nomeUnidade'];

    // $data = isset($_POST['data']) ? new DateTime($_POST['data']) : false;
    // $dataRecebimento = $data->format('d/m/Y');
     // $_SESSION['data'] =	$dataRecebimento;
		// $data = date('d/m/Y', strtotime($data));

		$sql1 = "INSERT INTO animais (idAnimal, data, agente) VALUES ('$idAnimal','$data' , '$agenteRecebedor')";

		$sql2 = "INSERT INTO entregadores(nome, tipoEntrega) VALUES ('$nomeEntregador', '$tipoRecolhimento')";

		//executa e armazena o $sql
		$salvar1 = mysqli_query($conexao, $sql1);
		$salvar2 = mysqli_query($conexao, $sql2);


  		//Pegar idEntregador
		$pegarEntregador = "SELECT MAX(idEntregador) FROM entregadores";
		$resultEntregador = mysqli_query($conexao, $pegarEntregador);

		while($row = mysqli_fetch_row($resultEntregador))
		{
			$idEntregador = $row[0];
		}

		//Pegar idAnimal

		$pegarAnimal = "SELECT MAX(idAnimal) FROM animais";
  		$resultAnimal =  mysqli_query($conexao, $pegarAnimal);

 		while($row = mysqli_fetch_row($resultAnimal))
		{
			$idAnimal = $row[0];
		}

		//Pegar idUnidade
		$pegarUnidade = "SELECT * FROM unidades WHERE nome = '$unidade'";
		$resultUnidade =  mysqli_query($conexao, $pegarUnidade);

		while($row = mysqli_fetch_row($resultUnidade))
		{
			$idUnidade = $row[0];
		}


		$sql3 = "UPDATE animais SET idEntregador='$idEntregador' WHERE idAnimal='$idAnimal'";
		$salvar3 = mysqli_query($conexao, $sql3);

		header("Location:listaAnimais.php");

	}



//

?>
