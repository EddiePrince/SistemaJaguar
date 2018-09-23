<?php
//Conexão com Banco
  	include 'conexao.inc.php';

    $nomeUnidade = $_POST['nome'];
    $tipoUnidade = $_POST['tipoUnidade'];

    $nome_Unidade  = filter_input(INPUT_POST, 'nome ');


  $result_alteracao = "UPDATE unidades SET nome = '$nomeUnidade' WHERE idUnidade = '$id_Unidade'";
  $salva_alteracao = mysqli_query($conexao, $result_alteracao);

  $result_alteracao2 = "UPDATE unidades SET tipoUnidade = '$tipoUnidade' WHERE idUnidade = '$id_Unidade'";
  $salva_alteracao2 = mysqli_query($conexao, $result_alteracao2);


  header("Location:listaUnidades.php");

// if (mysqli_affected_rows($conexao)) {
//   header("Location:listaUsuarios.php");
// }else {
//   header("Location:editar.php?idUsuario=$idUsuario");
//
// }


	// //Pegar idTelefone
	// $pegarTelefone = "SELECT MAX(idTelefone) FROM telefones";
	// $resultTelefone =  mysqli_query($conexao, $pegarTelefone);
  //
	// while($row = mysqli_fetch_row($resultTelefone))
	// {
	// 	$idTelefone = $row[0];
	// 	echo $idTelefone;
	// }

	// $sql3 = "UPDATE usuarios SET idTelefone='$idTelefone' WHERE idUsuario='$idUsuario'";
	// $salvar3 = mysqli_query($conexao, $sql3);


?>
