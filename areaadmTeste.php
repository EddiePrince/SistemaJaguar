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
      <div class="container-fluid">
        <!-- <div id="header">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="logo">
                  <div class="logo_admin">
                    <a href="areaadm.php"> <img src="img/logo.png" alt="Logo"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> -->

      <div class="corpoAdm">


          <div id="AreaPcp">
            <div class="container">
                  <h1 class="titulo"><strong>Menu</strong></h1><br><br>


              <div class="row">

                <div class="col-12 col-sm-6">
                  <div class="promocoes">
                    <div class="row">
                      <div class="col-12 col-lg-12 col-xl-6">
                        <div id="menu">
                          <ul>
                            <li class="foto"> <a href="listaUnidades.php"><img src="img/logo.png" alt="foto"></a> </li>
                          </ul>
                        </div>
                      </div><br>

                      <div class="col-12 col-lg-12 col-xl-6">
                        <div id="menu">
                          <ul>
                            <li class="foto"> <a href="listaUnidades.php"><img src="img/logo.png" alt="foto"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><br>

                <div class="col-12 col-sm-6">
                  <div class="promocoes">
                    <div class="row">
                      <div class="col-12 col-lg-12 col-xl-6">
                        <div id="menu">
                          <ul>
                            <li class="foto"> <a href="listaUnidades.php"><img src="img/logo.png" alt="foto"></a> </li>
                          </ul>
                        </div>
                      </div><br>

                      <div class="col-12 col-lg-12 col-xl-6">
                        <div id="menu">
                          <ul>
                            <li class="foto"> <a href="listaUnidades.php"><img src="img/logo.png" alt="foto"></a> </li>
                          </ul>
                        </div>
                      </div><br>
                    </div>
                  </div>
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
  </div>


	</body>

</html>
