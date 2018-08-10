<?php
//Conexão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco


	
	if (isset($_POST['submit'])) {
		
 	
		$nome = $_POST['nomeUnidade'];
		$cnpj = $_POST['cnpj'];
		$tipo = $_POST['tipoUnidade'];
		$uf = $_POST['uf'];
		$municipio = $_POST['municipio'];
		$cep = $_POST['cep'];
		$bairro = $_POST['bairro'];
		$lote = $_POST['lote'];
		$complemento = $_POST['complemento'];
		

		
		$sql1 = "INSERT INTO unidades (nome, cnpj, tipoUnidade) VALUES ('$nome','$cnpj' , '$tipo')";


		$sql2 = "INSERT INTO enderecos(uf, municipio, cep, bairro, lote, complemento) VALUES ('$uf', '$municipio', '$cep', '$bairro' , '$lote', '$complemento')";

	
		//executa e armazena o $sql
		$salvar1 = mysqli_query($conexao, $sql1);
		$salvar2 = mysqli_query($conexao, $sql2);
		

		//Pegar id Endereço
		$pegarEndereco = "SELECT MAX(idEndereco) FROM enderecos";
  		$resultEndereco =  mysqli_query($conexao, $pegarEndereco);

  		while($row = mysqli_fetch_row($resultEndereco))
		{
			$idEndereco = $row[0];
		}

  		//Pegar idUnidade
		$pegarUnidade = "SELECT MAX(idUnidade) FROM unidades";
		$resultUnidade = mysqli_query($conexao, $pegarUnidade);

		while($row = mysqli_fetch_row($resultUnidade))
		{
			$idUnidade = $row[0];
		}
 			

		$sql3 = "UPDATE unidades SET idEndereco='$idEndereco' WHERE idUnidade='$idUnidade'";
		$salvar3 = mysqli_query($conexao, $sql3);

		echo "Operação foi Realizada com Sucesso!";
}
	
 

?>
<!-- <br> <a href="CadastroAnimal.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a> -->

