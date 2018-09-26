<?php
	// $idArea = $_GET['id'];
  //Conecção com Banco
  include 'conexao.inc.php';
  if(!empty($idArea)){
  	$result_area = "DELETE FROM areas WHERE idArea='$idArea'";
  	$resultado_area= mysqli_query($conexao, $result_area);

  	if(mysqli_affected_rows($conexao)){
			echo "<script>alert('Área EXCLUÍDA com sucesso!.'); window.location.href='listaAreas.php';</script>";

  	}else{
  		echo "<p style='color:red;'>Erro, a área NÃO foi excluída com sucesso</p>;";
  		header("Location: perfilArea.php");
  		}
    }


 ?>
