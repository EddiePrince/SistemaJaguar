<?php
	$idUsuario = $_GET['id'];
  //Conecção com Banco
  include 'conexao.inc.php';
  if(!empty($idUsuario)){
  	$result_usuario = "DELETE FROM usuarios WHERE idUsuario='$idUsuario'";
  	$resultado_usuario = mysqli_query($conexao, $result_usuario);

  	if(mysqli_affected_rows($conexao)){
			echo "<script>alert('Usuário EXCLUÍDO com sucesso!.'); window.location.href='listaUsuarios.php';</script>";

  	}else{
  		echo "<p style='color:red;'>Erro o usuário NÃO foi apagado com sucesso</p>;";
  		header("Location: perfilUsuario.php");
  		}
    }


 ?>
