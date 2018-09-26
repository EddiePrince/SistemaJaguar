<?php
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';

  //Selecao de dados para serem exibidos na caixa input
  // $result_usuario = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
  // $resultado_usuario = mysqli_query($conexao, $result_usuario);
  // $row_usuario = mysqli_fetch_assoc($resultado_usuario);
  $sql33 = "SELECT * FROM areas,proprietarios,enderecos ";
  $result33 = $conexao->query($sql33);

  if($result33->num_rows > 0)
  {
   $row = $result33->fetch_assoc();
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
      <br>  <h3 class="titulo1">Dados da Área</h3><br>
      <div class="container">

      <form method="post" action="post_editar_area.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="hidden" name="idArea" value="<?php echo $row['idArea'];  ?>" >
            <input type="hidden" name="idProprietario" value="<?php echo $row['idProprietario'];  ?>" >
            <input type="hidden" name="idEnderecos" value="<?php echo $row['idEnderecos'];  ?>" >
            <label>Nome da Propriedade:</label>
            <input class="form-control" type="text" name="nomePropriedade" value="<?php echo $row['nomePropriedade'];  ?>" required>
          </div>
          <div class="col-md-6 mb-3">
            <input type="hidden" name="idArea" value="<?php echo $row['idArea'];  ?>" >
            <label>Nome da Proprietário:</label>
            <input class="form-control" type="text" name="nomeProprietario" value="<?php echo $row['nomeProprietario'];  ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label>Latitude:</label>
            <input class="form-control" class="usuario" type="text" name="latitude" size="35" maxlength="100" value="<?php echo $row['latitude'];  ?>" required>
          </div>
            <div class="col-md-4 mb-3">
            <label>Longitude:</label><br>
            <input class="form-control" type="text" name="longitude" value="<?php echo $row['longitude'];  ?>" >
          </div>
          <div class="col-md-4 mb-3">
            <label>Bioma:</label>
            <input class="form-control" type="text" name="bioma" value="<?php echo $row['bioma'];  ?>" required>
          </div>
          <!-- <div class="col-md-3 mb-3">
            <label>Município:</label>
            <input class="form-control" type="text" name="municipio" value="<?php echo $row['municipio'];  ?>" required>
          </div> -->
      </div>
        <div class="row">
          <div class="col-md-2 mb-3">
            <label>Distância do CETAS:</label>
            <input class="form-control" class="usuario" type="text" name="distancia" size="35" maxlength="100" value="<?php echo $row['distancia'];  ?>" required>
          </div>
            <div class="col-md-10 mb-3">
            <label>Observações:</label><br>
            <input class="form-control" type="text" name="observacoes" value="<?php echo $row['observacoes'];  ?>" ><br><br>
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
