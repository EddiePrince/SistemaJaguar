<?php
	$idAnimal = $_GET['id'];
  //Conecção com Banco
  include 'conexao.inc.php';
  if(!empty($idAnimal)){
  	$result_animal = "DELETE FROM animais WHERE idAnimal='$idAnimal'";
  	$resultado_animal= mysqli_query($conexao, $result_animal);

  	if(mysqli_affected_rows($conexao)){
			echo "<script>alert('Animal EXCLUÍDO com sucesso!.'); window.location.href='listaAnimais.php';</script>";

  	}else{
  		echo "<p style='color:red;'>Erro, o animal NÃO foi excluído com sucesso</p>;";
  		header("Location: perfilAnimal.php");
  		}
    }


 ?>
