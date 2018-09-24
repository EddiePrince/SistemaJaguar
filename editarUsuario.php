<?php
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';

  //Selecao de dados para serem exibidos na caixa input
  // $result_usuario = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
  // $resultado_usuario = mysqli_query($conexao, $result_usuario);
  // $row_usuario = mysqli_fetch_assoc($resultado_usuario);
  echo $_GET[''];
  $sql1 = "SELECT * FROM usuarios WHERE idUsuario='$_GET['id']'";
  $result1 = $conexao->query($sql1);

  if($result1->num_rows > 0)
  {
    while($row = $result1->fetch_assoc()){
      $nome2 = $row['nome'];
      $email2 = $row['email'];
      $senha2 = $row['senha'];
      echo $nome2;
      echo $email2;
      echo $senha2;
    }
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Alterações</title>
</head>

<body>
  <?php
    include 'header.inc.php';

  ?>

	<div id="pageUsuario" class="backgroundimgs">
    <div id="fundoTransparente">
      <br>  <h3 class="titulo1">Alterações</h3><br>
      <div class="container">

      <form method="post" action="post_editar_usuario.php">
        <div class="row">
          <div class="col-md-12 mb-3">
            
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome" value="<?php echo $nome;  ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-3">
            <label>E-mail:</label>
            <input class="form-control" class="usuario" type="text" name="email" size="35" maxlength="100" value="<?php echo $email;  ?>" required>
          </div>
            <!-- <div class="col-md-3 mb-3">
            <label>Telefone:</label><br>
            <input class="form-control" type="text" name="telefone" value="<?php echo $row['idTelefone'];  ?>" ><br><br>
          </div> -->
          <div class="col-md-5 mb-3">
            <label>Senha:</label>
            <input class="form-control" type="text" name="senha" value="<?php echo $senha;  ?>" required>
          </div>
      </div>
      <button class="btn btn-default" type="submit">Editar</button><br><br><br><br>
      </form>

    </div>

      <!--
          <div class="container">


            <div class="row">
              <div class="col-md-3 mb-3">


                <form method="post" action="post_cadastro_usuario.php">



              <div class="row">
                  <div class="col-md-4 mb-3">
                  <label>Telefone:</label><br>
                  <input class="form-control" type="text" name="telefone"><br><br>
                </div>


                </div>
                <div class="row">
                <div class="col-md-3 mb-3">
                  <label>Selecione a Unidade:</label><br>
                  <select class="form-control" name="nomeUnidade" size=1>
                    <?php include 'selectUnidades.inc.php'; ?>
                  </select>
                </div>

              </div>
            <button class="btn btn-default" type="submit">Cadastrar</button><br><br><br><br>
          </form>
          </div>

           -->
        </div>
     </div>

<!--
      <div id="alerta">
        <div id="boxtop"></div>
        Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
        <button id="botao" onclick="redirect(); apagar(); ">OK</button>
      </div> -->

        <?php include 'footer.php';
            include 'verificarUnidades.inc.php';
        ?>

      </div>
    </div>





</body>
</html>
