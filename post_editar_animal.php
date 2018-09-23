<?php
//Conexão com Banco
  	include 'conexao.inc.php';

    $codMarcacao = $_POST['codMarcacao'];
    $tipoMarcacao = $_POST['tipoMarcacao'];
    $localMarcacao = $_POST['localMarcacao'];
    $nomeComum = $_POST['nomeComum'];
    $nomeCientifico = $_POST['nomeCientifico'];
    $familia = $_POST['familia'];
    $ordem = $_POST['ordem'];

    $id_animal = filter_input(INPUT_POST, 'idTriagem');


  $result_alteracao = "UPDATE dadosTriagem SET codMarcacao = '$codMarcacao' WHERE idTriagem = '$id_animal'";
  $salva_alteracao = mysqli_query($conexao, $result_alteracao);

  $result_alteracao2 = "UPDATE dadosTriagem SET tipoMarcacao = '$tipoMarcacao' WHERE idTriagem = '$id_animal'";
  $salva_alteracao2 = mysqli_query($conexao, $result_alteracao2);

  $result_alteracao3 = "UPDATE dadosTriagem SET localMarcacao = '$localMarcacao' WHERE idTriagem = '$id_animal'";
  $salva_alteracao3 = mysqli_query($conexao, $result_alteracao3);

  $result_alteracao4 = "UPDATE dadosTriagem SET nomeComum = '$nomeComum' WHERE idTriagem = '$id_animal'";
  $salva_alteracao4 = mysqli_query($conexao, $result_alteracao4);

  $result_alteracao5 = "UPDATE dadosTriagem SET nomeCientifico = '$nomeCientifico' WHERE idTriagem = '$id_animal'";
  $salva_alteracao5 = mysqli_query($conexao, $result_alteracao5);

  $result_alteracao6 = "UPDATE dadosTriagem SET familia = '$familia' WHERE idTriagem = '$id_animal'";
  $salva_alteracao6 = mysqli_query($conexao, $result_alteracao6);

  $result_alteracao7 = "UPDATE dadosTriagem SET ordem = '$ordem' WHERE idTriagem = '$id_animal'";
  $salva_alteracao7 = mysqli_query($conexao, $result_alteracao7);

  header("Location:listaAnimais.php");

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
