<?php
//Conexão com Banco
  include 'conexao.inc.php';
  include 'validarlogin.inc.php'; //É onde o id do usuário é salvo na sessão
  
  $idUsuario = $_SESSION['idUsuario'];

//Pegar id do animal

  	$getAnimalId = "SELECT MAX(idAnimal) FROM animais";
  	$getAnimalIdresult = mysqli_query($conexao, $getAnimalId);

 	while($row =mysqli_fetch_row($getAnimalIdresult))
	{
		$idAutomatico = $row[0]+1;
	}
//Pegar data
	$data = date("d/m/y");


	if (isset($_POST['submit'])) {


		$agenteRecebedor = $_POST['nomeAgente'];
		$tipoRecolhimento = $_POST['tipoEntrega'];
		$nomeEntregador = $_POST['nomeEntregador'];
		$unidade = $_POST['nomeUnidade'];
		
		$sql1 = "INSERT INTO animais (idAnimal, data, agente) VALUES ('$idAutomatico','$data' , '$agenteRecebedor')";

		$sql2 = "INSERT INTO entregadores(nome, cpfcnpj, telefone, tipoEntrega) VALUES ('$nomeEntregador', '$cpfcnpj', '$telefone', '$tipoRecolhimento')";

		$sql3 = "INSERT INTO enderecos(uf, municipio, cep, bairro, lote, complemento) VALUES ('$uf', '$municipio', '$cep', '$bairro' , '$lote', '$complemento')";

		$sql4 = "INSERT INTO anexos(tipoDocumento, nDocumento, arquivo) VALUES ('$tipoDocumento', '$nDocumento', '$arquivo')";

		// ,'$procedencia', '$codMarca' , '$tipoMarca' , '$localMarca', '$nomeComum', '$nomeCientifico', '$familia', '$ordem'

		//executa e armazena o $sql
		$salvar1 = mysqli_query($conexao, $sql1);
		$salvar2 = mysqli_query($conexao, $sql2);
		$salvar3 = mysqli_query($conexao, $sql3);
		$salvar4 = mysqli_query($conexao, $sql4);

		//Pegar id Endereço
		$pegarEndereco = "SELECT MAX(idEndereco) FROM enderecos";
  		$resultEndereco =  mysqli_query($conexao, $pegarEndereco);

  		while($row = mysqli_fetch_row($resultEndereco))
		{
			$idEndereco = $row[0];
		}

  		//Pegar idEntregador
		$pegarEntregador = "SELECT MAX(idEntregador) FROM entregadores";
		$resultEntregador = mysqli_query($conexao, $pegarEntregador);

		while($row = mysqli_fetch_row($resultEntregador))
		{
			$idEntregador = $row[0];
		}


		$sql5 = "UPDATE entregadores SET idEndereco='$idEndereco' WHERE idEntregador='$idEntregador'";
		$salvar5 = mysqli_query($conexao, $sql5);


		//Pegar id Anexo
		$getFileId = "SELECT MAX(idAnexo) FROM anexos";
  		$getFileIdresult =  mysqli_query($conexao, $getFileId);

 		while($row =mysqli_fetch_row($getFileIdresult))
		{
			$idAnexo = $row[0];
		}

		$sql6 = "UPDATE entregadores SET idAnexo='$idAnexo' WHERE idEntregador='$idEntregador'";
		$salvar6 = mysqli_query($conexao, $sql6);

		//Pegar idAnimal

		$pegarAnimal = "SELECT MAX(idAnimal) FROM animais";
  		$resultAnimal =  mysqli_query($conexao, $pegarAnimal);

 		while($row =mysqli_fetch_row($resultAnimal))
		{
			$idAnimal = $row[0];
		}


		$sql7 = "UPDATE animais SET idEntregador='$idEntregador' WHERE idAnimal='$idAnimal'";
		$salvar7 = mysqli_query($conexao, $sql7);

		//Pegar id unidade
		$pegarUnidade="SELECT idUnidade FROM unidades WHERE nome='$unidade'";
		$resultUnidade= mysqli_query($conexao, $pegarUnidade);

		while ($row=mysqli_fetch_row($resultUnidade)) {
			$idUnidade = $row[0];
		}

		$sql8 = "UPDATE animais SET idUnidade='$idUnidade' WHERE idAnimal='$idAnimal'";
		$salvar8 = mysqli_query($conexao, $sql8);




		echo "Operação foi Realizada com Sucesso!";
}



?>
<!-- <br> <a href="CadastroAnimal.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a> -->
