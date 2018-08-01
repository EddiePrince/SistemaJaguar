<?php
//Conecção com Banco
include 'conexao.php';//inclusão do arquivo de conexão com o banco

$data = $_POST['data'];
$agente_recebedor = $_POST['agente_recebedor'];
$tipo_recolhimento = $_POST['tipo_recolhimento'];
$municipio_procedencia = $_POST['municipio_procedencia'];
$uf = $_POST['uf'];
$local_procedencia = $_POST['local_procedencia'];
$dieta = $_POST['dieta'];
$nome_comum = $_POST['nome_comum'];
$nome_cientifico = $_POST['nome_cientifico'];

$sql = "insert into animais (data, agente_recebedor, tipo_recolhimento, municipio_procedencia, uf, local_procedencia, dieta, nome_comum, nome_cientifico) values ('$data', '$agente_recebedor', '$tipo_recolhimento', '$municipio_procedencia', '$uf', '$local_procedencia', '$dieta', '$nome_comum', '$nome_cientifico')"; //iserindo dados digitados do formulario para a tabela usuarios
//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "Operação foi Realizada com Sucesso!";

mysqli_close($conexao);


//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="Cadastro_animais.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a>
