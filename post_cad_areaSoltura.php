<?php
//Conexão com Banco
  	include 'conexao.inc.php';


  $nomePropriedade = $_POST['nomePropriedade'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $bioma = $_POST['bioma'];
  $distancia = $_POST['distancia'];
  $observacoes = $_POST['observacoes'];
  $numero = $_POST['$numero'];
	$uf = $_POST['uf'];
	$municipio = $_POST['municipio'];
  $cep = $_POST['cep'];
  $lote = $_POST['lote'];
  $complemento = $_POST['complemento'];
  $nomeProprietario = $_POST['nomeProprietario'];
  $email = $_POST['email'];
	$enderecoArea = $_POST['enderecoArea'];


	$sql1 = "INSERT INTO areas (nomePropriedade) VALUES ('$nomePropriedade')";
	$salvar1 = mysqli_query($conexao, $sql1);

	$sql1 = "INSERT INTO areas (nomePropriedade, latitude, longitude, bioma, distancia, observacoes) VALUES ('$nomePropriedade', '$latitude', '$longitude', '$bioma',  '$distancia',  '$observacoes')";
	$salvar1 = mysqli_query($conexao, $sql1);

	$sql2 = "INSERT INTO telefones (numero) VALUES ('$numero')";
	$salvar2 = mysqli_query($conexao, $sql2);

	$sql3 = "INSERT INTO enderecos (uf, municipio, cep, lote, complemento) VALUES ('$uf', '$municipio', '$cep', '$lote', '$complemento')";
	$salvar3 = mysqli_query($conexao, $sql2);

	$sql4 = "INSERT INTO proprietarios (nomeProprietario, email) VALUES ('$nomeProprietario', '$email')";
	$salvar4 = mysqli_query($conexao, $sql2);




  //
	// //Pegar idTelefone
	// $pegarTelefone = "SELECT MAX(idTelefone) FROM telefones";
	// $resultTelefone =  mysqli_query($conexao, $pegarTelefone);
  //
	// while($row = mysqli_fetch_row($resultTelefone))
	// {
	// 	$idTelefone = $row[0];
	// 	echo $idTelefone;
	// }
  //
	// //Pegar idUsuario
	// $pegarUsuario = "SELECT MAX(idUsuario) FROM usuarios";
	// $resultUsuario =  mysqli_query($conexao, $pegarUsuario);
  //
	// while($row = mysqli_fetch_row($resultUsuario))
	// {
	// 	$idUsuario = $row[0];
	// 	echo $idUsuario;
	// }
  //
	// //Pegar idUnidade
	// $pegarUnidade = "SELECT * FROM unidades WHERE nome = '$unidade'";
	// $resultUnidade =  mysqli_query($conexao, $pegarUnidade);
  //
	// while($row = mysqli_fetch_row($resultUnidade))
	// {
	// 	$idUnidade = $row[0];
	// }
  //
	// $sql3 = "UPDATE usuarios SET idTelefone='$idTelefone' WHERE idUsuario='$idUsuario'";
	// $salvar3 = mysqli_query($conexao, $sql3);
  //
	// $sql4 = "UPDATE usuarios SET idUnidade='$idUnidade' WHERE idUsuario='$idUsuario'";
	// $salvar4 = mysqli_query($conexao, $sql4);

	header("Location:listaAreas.php");

?>
