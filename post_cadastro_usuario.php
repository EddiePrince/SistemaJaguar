<?php
//Conexão com Banco
  	include 'conexao.inc.php';


	$perfil = $_POST['perfil'];
	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];
	$unidade = $_POST['nomeUnidade'];


	$sql1 = "INSERT INTO usuarios (perfil, matricula, nome, email, senha) VALUES ('$perfil', '$matricula', '$nome', '$email',  '$senha')"; 
	$salvar1 = mysqli_query($conexao, $sql1);

	$sql2 = "INSERT INTO telefones (numero) VALUES ('$telefone')"; 
	$salvar2 = mysqli_query($conexao, $sql2);

	
	$pegarTelefone = "SELECT MAX(idTelefone) FROM telefones";
	$resultTelefone =  mysqli_query($conexao, $pegarTelefone);

	while($row = mysqli_fetch_row($resultTelefone))
	{
		$idTelefone = $row[0];
		echo $idTelefone;
	}
	
	$pegarUsuario = "SELECT MAX(idUsuario) FROM usuarios";
	$resultUsuario =  mysqli_query($conexao, $pegarUsuario);

	while($row = mysqli_fetch_row($resultUsuario))
	{
		$idUsuario = $row[0];
		echo $idUsuario;
	}

	$pegarUnidade = "SELECT * FROM unidades WHERE nome = '$unidade'";
	$resultUnidade =  mysqli_query($conexao, $pegarUnidade);

	while($row = mysqli_fetch_row($resultUnidade))
	{
		$idUnidade = $row[0];
	}

	$sql3 = "UPDATE usuarios SET idTelefone='$idTelefone' WHERE idUsuario='$idUsuario'";
	$salvar3 = mysqli_query($conexao, $sql3);

	$sql4 = "UPDATE usuarios SET idUnidade='$idUnidade' WHERE idUsuario='$idUsuario'";
	$salvar4 = mysqli_query($conexao, $sql4);

	header("Location:listaUsuarios.php");

?>
