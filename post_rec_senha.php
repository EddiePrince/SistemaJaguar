<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf8mb4_unicode_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
		<title>Recuperação de Senha</title>
</head>
<body>
  <div id="page">
    <div class="container-fluid">

		<div class="corpoAdm">

      <?php

        $matricula = $_POST['matricula'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $titulo = $_POST['titulo'];
        $mensagem = $_POST['mensagem'];

      $sql = "insert into recuperacaosenha (criacao, matricula, nome, email, titulo, mensagem) VALUES ( NOW(), '$matricula' , '$nome' , '$email', '$titulo', '$mensagem')";
      //executa e armazena o $sql
      $salvar = mysqli_query($conexao, $sql);


      $sql = "select * from recuperacaosenha";
      $consulta = mysqli_query($conexao, $sql);
      $registros = mysqli_num_rows($consulta); //mostrar quantos registros existem no banco

      if ($registros > 0) {

        // VERIFICAR COMO MOSTRAR MENSAGEM DE SUCESSO E REDIRECIONAR PARA TELA DE LOGIN
        // DUPLICA AS INFORMAÇÕES NO BANCO AO ATUALIZAR A PAGINA
        echo "<br><h3 style='color:green;'>A solicitação foi enviada com sucesso!<br></h3>";
        echo "<Br><strong>Dados da Mensagem: </strong>";
        echo "<br>Matricula: " .$matricula;
        echo "<br>Nome: " .$nome;
        echo "<br>Email: " .$email;
        echo "<br>Titulo: " .$titulo;
        echo "<br>Mensagem: " .$mensagem;
        //header('Location: index.php');
      }else {
          echo "<h3 style='color:red;'>Erro na solicitação de Recuperação de Senha!</h3>";
      }
      mysqli_close($conexao);

      ?>
      <div>
        <br><a href="areaadm.php">Voltar</a>
      </div>

  </div>
  </div>
  </div>

</body>
</html>
