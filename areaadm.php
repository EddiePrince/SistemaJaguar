<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
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
      <div>

        <!-- Menu -->
        <?php include 'menuAdm.php'; ?>
        <!-- Fim Menu -->


           <h4>Bem vindo Administrador!</h4>
         </div>
          </div>
         <div class="footer">
           <?php include 'footer.php'; ?>
         </div>
    	</div>
    	</div>


	</body>

</html>
