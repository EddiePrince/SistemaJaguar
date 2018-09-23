<?php
//Conexão com Banco
  	include 'conexao.inc.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    // $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $id_Usuario = filter_input(INPUT_POST, 'idUsuario');


  $result_alteracao = "UPDATE usuarios SET nome = '$nome' WHERE idUsuario = '$id_Usuario'";
  $salva_alteracao = mysqli_query($conexao, $result_alteracao);

  $result_alteracao2 = "UPDATE usuarios SET email = '$email' WHERE idUsuario = '$id_Usuario'";
  $salva_alteracao2 = mysqli_query($conexao, $result_alteracao2);
  //
  // $result_alteracao3 = "UPDATE usuarios SET telefone = '$telefone' WHERE idUsuario = '$id_Usuario'";
  // $salva_alteracao3 = mysqli_query($conexao, $result_alteracao3);

  $result_alteracao4 = "UPDATE usuarios SET senha = '$senha' WHERE idUsuario = '$id_Usuario'";
  $salva_alteracao4 = mysqli_query($conexao, $result_alteracao4);

  header("Location:listaUsuarios.php");

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
