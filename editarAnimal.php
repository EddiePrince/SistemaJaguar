<?php
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';

  //Selecao de dados para serem exibidos na caixa input
  // $result_usuario = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
  // $resultado_usuario = mysqli_query($conexao, $result_usuario);
  // $row_usuario = mysqli_fetch_assoc($resultado_usuario);
  $sql21 = "SELECT * FROM dadostriagem ";
  $result21 = $conexao->query($sql21);

  if($result21->num_rows > 0)
  {
   $row = $result21->fetch_assoc();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Alterações de dados Cadastrais</title>
</head>

<body>
  <?php
    include 'header.inc.php';

  ?>

	<div id="pageUsuario" class="backgroundimgs">
    <div id="fundoTransparente">
      <br>  <h3 class="titulo1">Dados do Animal</h3><br>
      <div class="container">

      <form method="post" action="post_editar_animal.php">
        <div class="row">
          <div class="col-md-3 mb-3">
            <input type="hidden" name="idTriagem" value="<?php echo $row['idTriagem'];  ?>" >
            <label>Codigo de Marcação::</label>
            <input class="form-control" type="text" name="codMarcacao" value="<?php echo $row['codMarcacao'];  ?>" >
          </div>
          <div class="col-md-4 mb-3">
            <label>Tipo de Marcação:</label>
            <input class="form-control" type="text" name="tipoMarcacao" size="35" maxlength="100" value="<?php echo $row['tipoMarcacao'];  ?>">
          </div>
            <div class="col-md-5 mb-3">
            <label>Local de Marcação:</label><br>
            <input class="form-control" type="text" name="localMarcacao" value="<?php echo $row['localMarcacao'];  ?>" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Nome Comum:</label>
            <input class="form-control" type="text" name="nomeComum" value="<?php echo $row['nomeComum'];  ?>" >
          </div>
          <div class="col-md-6 mb-3">
            <label>Nome Científico:</label>
            <input class="form-control" type="text" name="nomeCientifico" size="35" maxlength="100" value="<?php echo $row['nomeCientifico'];  ?>" >
          </div>
            <div class="col-md-3 mb-3">
            <label>Familia:</label><br>
            <input class="form-control" type="text" name="familia" value="<?php echo $row['familia'];  ?>" ><br><br>
          </div>
          <div class="col-md-3 mb-3">
            <label>Ordem:</label>
            <input class="form-control" type="text" name="ordem" value="<?php echo $row['ordem'];  ?>" >
          </div>
          <div class="col-md-6 mb-3">
            <label>Ultima Procedencia:</label>
            <input class="form-control" type="text" name="ultimaProcedencia" value="<?php echo $row['ultimaProcedencia'];  ?>">
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
