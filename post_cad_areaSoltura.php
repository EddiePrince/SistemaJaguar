<?php
//Conexão com Banco
  	include 'conexao.inc.php';


  $nomePropriedade = $_POST['nomePropriedade'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $bioma = $_POST['bioma'];
  $distancia = $_POST['distancia'];
  $observacoes = $_POST['observacoes'];
  $numero = $_POST['numero'];
  $uf = $_POST['uf'];
  $municipio = $_POST['municipio'];
  $cep = $_POST['cep'];
  $lote = $_POST['lote'];
  $complemento = $_POST['complemento'];
  $nomeProprietario = $_POST['nomeProprietario'];
  $email = $_POST['email'];
  $enderecoArea = $_POST['enderecoArea'];


	$sql1 = "INSERT INTO proprietarios (nomeProprietario, email) VALUES ('$nomeProprietario', '$email')";
	$salvar1 = mysqli_query($conexao, $sql1);

	$sql2 = "INSERT INTO telefones (numero) VALUES ('$numero')";
	$salvar2 = mysqli_query($conexao, $sql2);

	$sql3 = "INSERT INTO enderecos (uf, municipio, cep, lote, complemento) VALUES ('$uf', '$municipio', '$cep', '$lote', '$complemento')";
	$salvar3 = mysqli_query($conexao, $sql3);

	$sql4 = "INSERT INTO areas (nomePropriedade, latitude, longitude, bioma, distancia, observacoes) VALUES ('$nomePropriedade', '$latitude', '$longitude', '$bioma',  '$distancia',  '$observacoes')";
	$salvar4 = mysqli_query($conexao, $sql4);



	//Pegar IdArea
	$pegarIdArea = "SELECT MAX(idArea) FROM areas";
	$resultIdArea =  mysqli_query($conexao, $pegarIdArea);

	while($row = mysqli_fetch_row($resultIdArea))
	{
		$idArea = $row[0];
		echo $idArea;
	}

	//Pegar IdProprietario
	$pegarIdProprietario = "SELECT MAX(idProprietario) FROM proprietarios";
	$resultIdProprietario =  mysqli_query($conexao, $pegarIdProprietario);

	while($row = mysqli_fetch_row($resultIdProprietario))
	{
		$idProprietario = $row[0];
		echo $idProprietario;
	}

	//Pegar idTelefone
	$pegarIdTelefone = "SELECT MAX(idTelefone) FROM telefones";
	$resultIdTelefone =  mysqli_query($conexao, $pegarIdTelefone);

	while($row = mysqli_fetch_row($resultIdTelefone))
	{
		$idTelefone = $row[0];
		echo $idTelefone;
	}

	//Pegar idEndereco
	$pegarIdEndereco = "SELECT MAX(idEndereco) FROM enderecos";
	$resultIdEndereco =  mysqli_query($conexao, $pegarIdEndereco);

	while($row = mysqli_fetch_row($resultIdEndereco))
	{
		$idEndereco = $row[0];
		echo $idEndereco;
	}

	$sql5 = "UPDATE areas SET idProprietario='$idProprietario' WHERE idArea='$idArea'";
	$salvar5 = mysqli_query($conexao, $sql5);


	$sql6 = "UPDATE areas SET idTelefone='$idTelefone' WHERE idArea='$idArea'";
	$salvar6 = mysqli_query($conexao, $sql6);


 	$sql7 = "UPDATE areas SET idEndereco='$idEndereco' WHERE idArea='$idArea'";
	$salvar7 = mysqli_query($conexao, $sql7);

	header("Location:listaAreas.php");

?>
