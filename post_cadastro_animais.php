<?php
//Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco

//Pegar id do animal
  	$getId = "SELECT MAX(idAnimal) from animais";
  	$getId = "SELECT MAX(idAnimal) from animais";
  	$getIdresult =  mysqli_query($conexao, $getId);

 	while($row =mysqli_fetch_row($getIdresult))
	{
		$idAutomatico = $row[0]+1;
	}
  
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

	if (isset($_POST['nomeEntregador'])){
	$sql1 = "INSERT INTO animais (idAnimal, data, ultimaProcedencia, codMarcacao, tipoMarcacao, LocalMarcacao, nomeComum, nomeCientifico, familia, ordem) VALUES ('$idAutomatico','$dataRecebimento' , '$procedencia', '$codMarca' , '$tipoMarca' , '$localMarca', '$nomeComum', '$nomeCientifico', '$familia', '$ordem')"; 

	//executa e armazena o $sql
	$salvar = mysqli_query($conexao, $sql1);

	echo "Operação foi Realizada com Sucesso!";
} else{
	echo 'Preencha tudo';
}

	mysqli_close($conexao);


?>
<!-- <br> <a href="CadastroAnimal.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a> -->

