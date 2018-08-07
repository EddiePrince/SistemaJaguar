<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>

<?php

  $matricula = $_POST['matricula'];
  $nomeCompleto = $_POST['nomeCompleto'];
  $email = $_POST['email'];
  $titulo = $_POST['titulo'];
  $mensagem = $_POST['mensagem'];

$sql = "insert into recuperacaosenha (criacao, matricula, nomeCompleto, email, titulo, mensagem) VALUES ( NOW(), '$matricula' , '$nomeCompleto' , '$email', '$titulo', '$mensagem')";
//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);


$sql = "select * from recuperacaosenha";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta); //mostrar quantos registros existem no banco

if ($registros > 0) {

  // VERIFICAR COMO MOSTRAR MENSAGEM DE SUCESSO E REDIRECIONAR PARA TELA DE LOGIN
  // DUPLICA AS INFORMAÇÕES NO BANCO AO ATUALIZAR A PAGINA
  echo "<h6 style='color:green;'>Operação foi Realizada com Sucesso!<br></h6>";
  echo "<Br><strong>Dados da Mensagem: </strong>";
  echo "<br>Matricula: " .$matricula;
  echo "<br>Nome: " .$nomeCompleto;
  echo "<br>Email: " .$email;
  echo "<br>Titulo: " .$titulo;
  echo "<br>Mensagem: " .$mensagem;
  header('Location: index.php');
}else {
    echo "<h6 style='color:red;'>Erro na solicitação de Recuperação de Senha!</h6>";
}
mysqli_close($conexao);

?>
