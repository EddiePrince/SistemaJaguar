<?php
	$idUnidade = $_GET['id'];
  //Conecção com Banco
  include 'conexao.inc.php';
  if(!empty($idUnidade)){
  	$result_unidade = "DELETE FROM unidades WHERE idUnidade='$idUnidade'";
  	$resultado_unidade = mysqli_query($conexao, $result_unidade);

  	if(mysqli_affected_rows($conexao)){
			echo "<script>alert('Unidade EXCLUÍDA com sucesso!.'); window.location.href='listaUnidades.php';</script>";

  	}else{
  		echo "<p style='color:red;'>Erro a unidade NÃO foi excluída com sucesso</p>;";
  		header("Location: perfilUnidade.php");
  		}
    }


 ?>
