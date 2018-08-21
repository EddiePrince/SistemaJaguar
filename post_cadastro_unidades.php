<?php
//Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco


	
	if (isset($_POST['submit'])) {
		
 		

 		
 		
		$nomeUnidade = $_POST['nomeUnidade'];
 		$tipoUnidade = $_POST['tipoUnidade'];
		$telefone = $_POST['telefone'];
		$cnpj = $_POST['cnpj'];
		$uf = $_POST['uf'];
		$municipio = $_POST['municipio'];
		$cep = $_POST['cep'];
		$bairro = $_POST['bairro'];
		$lote = $_POST['lote'];
		$complemento = $_POST['complemento'];
		

		
		$sql1 = "INSERT INTO unidades(nome, tipoUnidade) VALUES ('$nomeUnidade', '$tipoUnidade')";

		$sql2 = "INSERT INTO telefones(numero) VALUES ('$telefone')";

		$sql3 = "INSERT INTO cnpjs(cnpj) VALUES ('$cnpj')";

		$sql4 = "INSERT INTO enderecos(uf, municipio, cep, bairro, lote, complemento) VALUES ('$uf', '$municipio', '$cep', '$bairro' , '$lote', '$complemento')";

	
		//executa e armazena o $sql
		$salvar1 = mysqli_query($conexao, $sql1);
		$salvar2 = mysqli_query($conexao, $sql2);
		$salvar3 = mysqli_query($conexao, $sql3);
		$salvar4 = mysqli_query($conexao, $sql4);
		
		//Pegar idUnidade
		$pegarUnidade = "SELECT MAX(idUnidade) FROM unidades";
		$resultUnidade = mysqli_query($conexao, $pegarUnidade);

		while($row = mysqli_fetch_row($resultUnidade))
		{
			$idUnidade = $row[0];
		}

		//Pegar idTelefone
		$pegarTelefone = "SELECT MAX(idTelefone) FROM telefones";
  		$resultTelefone =  mysqli_query($conexao, $pegarTelefone);

  		while($row = mysqli_fetch_row($resultTelefone))
		{
			$idTelefone = $row[0];
		}

		//Pegar idCnpj
		$pegarCnpj = "SELECT MAX(idCnpj) FROM cnpjs";
  		$resultCnpj =  mysqli_query($conexao, $pegarCnpj);

  		while($row = mysqli_fetch_row($resultCnpj))
		{
			$idCnpj = $row[0];
		}

		//Pegar idEndereço
		$pegarEndereco = "SELECT MAX(idEndereco) FROM enderecos";
  		$resultEndereco =  mysqli_query($conexao, $pegarEndereco);

  		while($row = mysqli_fetch_row($resultEndereco))
		{
			$idEndereco = $row[0];
		}
  		
 			

		$sql5 = "UPDATE unidades SET idTelefone='$idTelefone' WHERE idUnidade='$idUnidade'";
		$salvar5 = mysqli_query($conexao, $sql5);

		$sql6 = "UPDATE unidades SET idCnpj='$idCnpj' WHERE idUnidade='$idUnidade'";
		$salvar6 = mysqli_query($conexao, $sql6);

		$sql7 = "UPDATE unidades SET idEndereco='$idEndereco' WHERE idUnidade='$idUnidade'";
		$salvar7 = mysqli_query($conexao, $sql7);

		echo "Operação foi Realizada com Sucesso!";
}
	
 

?>
<!-- <br> <a href="CadastroAnimal.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a> -->

