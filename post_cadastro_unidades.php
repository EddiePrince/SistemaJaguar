<?php
//ConeXão com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>

<?php

  $nome = $_POST['nome'];
  $cnpj = $_POST['cnpj'];
  $tipoUnidade = $_POST['tipoUnidade'];


  //iserindo dados digitados do formulario para a tabela usuarios
$sql = "insert into unidades (nome, cnpj, tipoUnidade) values ('$nome' , '$cnpj', '$tipoUnidade')";

//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "Operação foi Realizada com Sucesso!";

mysqli_close($conexao);

//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="CadastroUnidade.php"> <input type="button" name="btn" value="Cadastrar Outra Unidade">  </a>
