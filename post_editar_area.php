<?php
//Conexão com Banco
  	include 'conexao.inc.php';

    $nomePropriedade = $_POST['nomePropriedade'];
    $nomeProprietario = $_POST['nomeProprietario'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $bioma = $_POST['bioma'];
    // $municipio = $_POST['municipio'];
    $distancia = $_POST['distancia'];
    $observacoes = $_POST['observacoes'];

    $id_Area = filter_input(INPUT_POST, 'idArea');
    $id_Proprietario = filter_input(INPUT_POST, 'idProprietario');
    $id_Endereco = filter_input(INPUT_POST, 'idEndereco');


  $result_alteracao = "UPDATE areas SET nomePropriedade = '$nomePropriedade' WHERE idArea = '$id_Area'";
  $salva_alteracao = mysqli_query($conexao, $result_alteracao);

  $result_alteracao2 = "UPDATE proprietarios SET nomeProprietario = '$nomeProprietario' WHERE idProprietario = '$id_Proprietario'";
  $salva_alteracao2 = mysqli_query($conexao, $result_alteracao2);

  $result_alteracao3 = "UPDATE areas SET latitude = '$latitude' WHERE idArea = '$id_Area'";
  $salva_alteracao3 = mysqli_query($conexao, $result_alteracao3);

  $result_alteracao4 = "UPDATE areas SET longitude = '$longitude' WHERE idArea = '$id_Area'";
  $salva_alteracao4 = mysqli_query($conexao, $result_alteracao4);

  $result_alteracao5 = "UPDATE areas SET bioma = '$bioma' WHERE idArea = '$id_Area'";
  $salva_alteracao5 = mysqli_query($conexao, $result_alteracao5);

  // $result_alteracao6 = "UPDATE enderecos SET municipio = '$municipio' WHERE idEndereco = '$id_Endereco'";
  // $salva_alteracao6 = mysqli_query($conexao, $result_alteracao6);

  $result_alteracao6 = "UPDATE enderecos SET distancia = '$distancia' WHERE idEndereco = '$id_Endereco'";
  $salva_alteracao6 = mysqli_query($conexao, $result_alteracao6);

  $result_alteracao7 = "UPDATE areas SET observacoes = '$observacoes' WHERE idArea = '$id_Area'";
  $salva_alteracao7 = mysqli_query($conexao, $result_alteracao7);

  header("Location:listaAreas.php");

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
