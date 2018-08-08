<?php
//ConeXão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>


<?php

$nomeUnidade = $_POST['nomeUnidade'];

  $tipoUnidade = $_POST['tipoUnidade'];
  $cnpj = $_POST['cnpj'];
  $cep = $_POST['cep'];
  $municipio = $_POST['municipio'];
  $bairro = $_POST['bairro'];
  $rua = $_POST['rua'];
  $lote = $_POST['lote'];
  $complemento = $_POST['complemento'];


$sql = "insert into unidades (nomeUnidade , tipoUnidade, cnpj, cep, municipio, bairro, rua, lote, complemento) values ('$nomeUnidade' , '$tipoUnidade', '$cnpj', '$cep', '$municipio', '$bairro', '$rua', '$lote', '$complemento')";
//
//)
//)"; //iserindo dados digitados do formulario para a tabela usuarios
// //executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "Operação foi Realizada com Sucesso!";

mysqli_close($conexao);

//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="CadastroUnidade.php"> <input type="button" name="btn" value="Cadastrar Outra Unidade">  </a>
