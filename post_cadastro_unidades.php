<?php
//Conecção com Banco
include 'conexao.php';//inclusão do arquivo de conexão com o banco

$cnpj = $_POST['cnpj'];
$cep = $_POST['cep'];
$municipio = $_POST['municipio'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


$sql = "insert into unidades (cnpj, cep, municipio, bairro, rua, numero, complemento) values ('$cnpj', '$cep', '$municipio', '$bairro', '$rua', '$numero', '$complemento')"; //iserindo dados digitados do formulario para a tabela usuarios
//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "Operação foi Realizada com Sucesso!";

mysqli_close($conexao);

//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="Cadastro_unidades.php"> <input type="button" name="btn" value="Cadastrar Outra Unidade">  </a>
