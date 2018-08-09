<?php
//Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco

//Pegar id do animal
 
  	$getAnimalId = "SELECT MAX(idAnimal) from animais";
  	$getAnimalIdresult = mysqli_query($conexao, $getAnimalId);

 	while($row =mysqli_fetch_row($getAnimalIdresult))
	{
		$idAutomatico = $row[0]+1;
	}

	
	if (isset($_POST['submit'])) {
		
 	
		$dataRecebimento = $_POST['dataRecebimento'];
		$agenteRecebedor = $_POST['nomeAgente'];
		$tipoRecolhimento = $_POST['tipoEntrega'];
		$nomeEntregador = $_POST['nomeEntregador'];
		$cpfcnpj = $_POST['cpfEntregador'];
		$telefone = $_POST['telefoneEntregador'];
		$uf = $_POST['uf'];
		$municipio = $_POST['municipio'];
		$cep = $_POST['cep'];
		$bairro = $_POST['bairro'];
		$lote = $_POST['lote'];
		$complemento = $_POST['complemento'];
		$tipoDocumento = $_POST['tipoDocumento'];
		$nDocumento = $_POST['nDocumento'];
		$arquivo = $_POST['uploadDocumento'];
		$unidade = $_POST['nomeUnidade'];
		$procedencia = $_POST['procedencia'];
		$dieta = $_POST['dieta'];
		$nomeComum = $_POST['nomeComum'];
		$nomeCientifico = $_POST['nomeCientifico'];
		$familia = $_POST['familia'];
		$ordem = $_POST['ordem'];
		$codMarca = $_POST['codMarcacao'];
		$tipoMarca = $_POST['tipoMarcacao'];
		$localMarca = $_POST['localMarcacao'];

		
		$sql1 = "INSERT INTO animais (idAnimal, data, nomeAgente) VALUES ('$idAutomatico','$dataRecebimento' , '$agenteRecebedor')";

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
		$getAdressId = "SELECT MAX(idEndereco) from enderecos";
  		$getAdressIdresult =  mysqli_query($conexao, $getAdressId);

 		while($row =mysqli_fetch_row($getAdressIdresult))
		{
			$idEndereco = $row[0];
		}	

		$sql5 = "INSERT INTO entregadores(idEndereco) VALUES ('$idEndereco')";
		$salvar5 = mysqli_query($conexao, $sql5);

		//Pegar id Anexo
		$getFileId = "SELECT MAX(idAnexo) from anexos";
  		$getFileIdresult =  mysqli_query($conexao, $getFileId);

 		while($row =mysqli_fetch_row($getFileIdresult))
		{
			$idAnexo = $row[0];
		}	

		$sql6 = "INSERT INTO entregadores(idAnexo) VALUES ('$idAnexo')";
		$salvar6 = mysqli_query($conexao, $sql6);

		//Pegar id Entregador
		$getDeliverId = "SELECT MAX(idEntregador) from entregadores";
  		$getDeliverIdresult =  mysqli_query($conexao, $getDeliverId);

 		while($row =mysqli_fetch_row($getDeliverIdresult))
		{
			$idEntregador = $row[0];
		}	

		$sql7 = "INSERT INTO animais(idEntregador) VALUES ('$idEntregador')";
		$salvar7 = mysqli_query($conexao, $sql7);


		echo "Operação foi Realizada com Sucesso!";
}
	
 

?>
<!-- <br> <a href="CadastroAnimal.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a> -->

