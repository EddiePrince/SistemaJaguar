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
      <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Área Principal</title>
  </head>

	<body>
    <div id="pageAdm">
        <!-- <div id="header">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="logo">
                  <div class="logo_admin">
                    <a href="areaadm.php"> <img src="img/logo.png" alt="Logo"></a>  <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> -->

      <div class="corpoAdm">
            <div class="container">

        		<h1 class="titulo"><strong>Menu</strong></h1><br><br>
          		<div class="row">
            			<div class="col-md-3 mb-3">
                    <a id="areaPcp" href="#.php" type="button" class="btn btn-default navbar-btn pull-right"> Cadastrar Unidade   <img src="img/remove-user.png" alt="#"></a>
              		</div>
              		<div class="col-md-3 mb-3">
                    <a id="areaPcp" href="#.php" type="button" class="btn btn-default navbar-btn pull-right">  Cadastrar Usuário  <img src="img/remove-user.png" alt="#"></a>
  	        		</div>
                <div class="col-md-3 mb-3">
                  <a id="areaPcp" href="#.php" type="button" class="btn btn-default navbar-btn pull-right">  Cadastrar Animal  <img src="img/remove-user.png" alt="#"></a>
                </div>
                <div class="col-md-3 mb-3">
                  <a id="areaPcp" href="#.php" type="button" class="btn btn-default navbar-btn pull-right">  Emitir Relatório  <img src="img/remove-user.png" alt="#"></a>
                </div>
        			</div>
        			</div>
        		</div>

  	          		<!-- <div class="container">
  	          			<div class="row">
                      <div class="col-md-3 mb-3">
                       <label >Telefone:</label>
                       <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Emitir Relatórios  <img src="img/remove-user.png" alt="Logout"></a>
                      </div>
                      <div class="col-md-3 mb-3">
  								     <label>UF:</label>

  							      </div>
  	        				  <div class="col-md-3 mb-3">
  								     <label>Municipio:</label>

  							      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CEP:</label>

                      </div>
  	          			</div>
  	          		</div>

  		            <div class="container">
  	          			<div class="row">
  				            <div class="col-md-4 mb-3">
  			                <label for="cc-cvv">Bairro:</label>

  				            </div>
  				            <div class="col-md-2 mb-3">
  			                <label for="cc-expiration">Lote:</label>

  				            </div>
  				            <div class="col-md-6 mb-3">
  			                <label for="cc-cvv">Complemento:</label>

  				            </div>
                      <div class="col-md-3 mb-3">
                        <input class="btn btn-default" name="submit" type="submit" value="Salvar">
                      </div>
  				          </div>
  				        </div> -->
  						</div>
              <!-- Erro de Validação W3C Identificado -->
              <div class="footer">
                <?php include 'footer.php'; ?>
              </div>
  					</div>



	</body>

</html>
