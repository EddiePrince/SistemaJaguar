<?php
//Conecção com Banco
include 'includes/conexao.php';//inclusão do arquio de conexão com o banco

$perfil = $_POST['perfil'];
$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "insert into usuarios (perfil, nomeCompleto, email, telefone, celular, usuario, senha) values ('$perfil', '$nomeCompleto', '$email', '$telefone', '$celular', '$usuario', '$senha')"; //iserindo dados digitados do formulario para a tabela usuarios
//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "A Operação foi Realizada com Sucesso!";

mysqli_close($conexao);


//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="Cadastro_usuario.php"> <input type="button" name="btn" value="Cadastrar Outro Usuário">  </a>
