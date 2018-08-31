<?php
  //Erro de Validação W3C Identificado
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <title>Área Principal</title>
</head>

<body>
  <?php
    include 'header.inc.php';
  ?>
  
  <div id="pageAdm" class="backgroundimgs">

      <div id="fundoTransparente">
        <div class="container">
          <h4>Bem vindo <?php echo $nome?>!</h4>
         </div>

         <div id="alerta">
           <div id="boxtop"></div>
           Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
         <button id="botao" onclick="apagar();">OK</button>
         </div>

        <div class="container">
      		<div class="row">
      			<div class="col-md-3 mb-3">
              <a id="areaPcp" href="https://email.bol.uol.com.br/login#" type="button" class="btn btn-default navbar-btn pull-right"> <img src="img/bol.png" alt="#"><br>  BOL   </a>
        		</div>
        		<div class="col-md-3 mb-3">
              <a id="areaPcp" href="https://www.yahoo.com/" type="button" class="btn btn-default navbar-btn pull-right"> <img src="img/Yahoo_logo.png" alt="#"><br>  YAHOO! </a>
    		    </div>
            <div class="col-md-3 mb-3">
              <a id="areaPcp" href="https://www.google.com/intl/pt/gmail/about/#" type="button" class="btn btn-default navbar-btn pull-right"> <img src="img/Gmail_Iogo.png" alt="#"><br>  GMAIL </a>
            </div>
            <div class="col-md-3 mb-3">
              <a id="areaPcp" href="https://email.uol.com.br/login/" type="button" class="btn btn-default navbar-btn pull-right"> <img src="img/uol.png" alt="#"><br>  UOL </a>
            </div>
    			</div>
          <div class="container">
      		<div class="row">
      			<div class="col-md-3 mb-3">
              <a id="areaPcp" href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1535363028&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3dbd463e49-24d0-e2ff-3b31-e98700ff1e54&id=292841&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015" type="button" class="btn btn-default navbar-btn pull-right"> <img src="img/Outlook.png" alt="#"><br>  OUTLOOK   </a>
        		</div>
            </div>
    			</div>
    			</div>
  			</div>
      <!-- Erro de Validação W3C Identificado -->
      <div class="footer">
        <?php include 'footer.php'; ?>
      </div>
		</div>



	</body>

</html>
