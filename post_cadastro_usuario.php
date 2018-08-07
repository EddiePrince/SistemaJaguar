<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>


<?php


$perfil = $_POST['perfil'];
$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];


$sql = "insert into usuarios (perfil, nomeCompleto, email, telefone, celular, matricula, senha) values ('$perfil', '$nomeCompleto', '$email', '$telefone', '$celular', '$matricula', '$senha')"; //iserindo dados digitados do formulario para a tabela usuarios
//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "<p style='color:green;'>Usuário cadastrado com Sucesso!</p>";

mysqli_close($conexao);


//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="CadastroUsuario.php"> <input type="button" name="btn" value="Cadastrar Outro Usuário">  </a><br>
<br> <a href="areaadm.php"> <input type="button" name="btn" value="Página Principal">  </a>
