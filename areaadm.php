<?php
  //Erro de Validação W3C Identificado
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
    <title>Área Principal</title>

  </head>

	<body>
      <div id="pageAdm">
        <div class="container-fluid">

      <div class="logo_admin">
        <a href="areaadm.php"> <img src="img/logo.png" alt="Logo"></a>
      </div>
      <div class="corpoAdm">
        <!-- Menu -->
        <!-- Erro de Validação W3C Identificado -->
        <?php include 'exibirMenu.inc.php'; ?>
        <!-- Fim Menu -->
        <div class="container">
          <h4>Bem vindo <?php echo $nome?>!</h4>
         </div>
            
              <div id="alerta">
                Não há nenhuma unidade cadastrada. Por favor, cadastre  alguma unidade.
              <button id="botao" onclick="redirecionar();">Cadastrar</button>  
              </div>
            
          </div>
          <!-- Erro de Validação W3C Identificado -->
         <div class="footer">
           <?php include 'footer.php'; ?>
         </div>
    	</div>
    	</div>
  <?php include 'verificarUnidades.inc.php'; ?>

	</body>

</html>
