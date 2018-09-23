<?php
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';

  //Selecao de dados para serem exibidos na caixa input
  // $result_usuario = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
  // $resultado_usuario = mysqli_query($conexao, $result_usuario);
  // $row_usuario = mysqli_fetch_assoc($resultado_usuario);
  $sql22 = "SELECT * FROM unidades ";
  $result22 = $conexao->query($sql22);

  if($result22->num_rows > 0)
  {
   $row = $result22->fetch_assoc();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Editar Unidade</title>
</head>

<body>
  <?php
    include 'header.inc.php';

  ?>

	<div id="pageUsuario" class="backgroundimgs">
    <div id="fundoTransparente">
      <br>  <h3 class="titulo1">Dados da Unidade</h3><br>
      <div class="container">

      <form method="post" action="post_editar_unidade.php">
        <div class="row">
          <div class="col-md-12 mb-3">
            <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario'];  ?>" >
            <label>Nome da Unidade:</label>
            <input class="form-control" type="text" name="nome" value="<?php echo $row['nome'];  ?>" >
          </div>
          <div class="col-md-7 mb-3">
            <label>tipo da Unidade:</label>
            <input class="form-control" type="text" name="tipoUnidade"  value="<?php echo $row['tipoUnidade'];  ?>" >
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


</body>
</html>
