<?php

  include 'includes/conexao.php';
  include 'includes/verificausuario.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Unidades Intedradas</title>

    <style type="text/css">

body{
  margin: 0px;
  font-size: 14px;
  color: #333;
  font-family: "Segoe Ui Light", sans-serif;
  line-height: 1.2;
}

.news .picture img{
  max-width: 100%;
  margin: 20px;
}

button{
  font-size: 20px;
  font-weight: 800;
  margin-bottom: 15px;
  margin: 20px;
  border: 1px solid #CCC;
  background-color: #56f700;
   border-radius: 1em;
}

form {
    /* Apenas para centralizar o form na página */
    margin: 0 auto;
    width: 95%;
    /* Para ver as bordas do formulário */
    padding: 1em;
    border: 1px solid #CCC;
}

footer{
  padding: 15px 0px;
}

    </style>
  </head>

  <body>
    <form action="" method="post">

      <div id="page">
      <div id="news">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1>Unidades Intedradas</h1>
            </div>
            <div class="col-12 col-lg-12 col-xl-6">
              <button>Criar</button>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="news">
                <div class="row">
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                  </div>
                  <div class="col-12 col-lg-12 col-xl-6">
                    <div class="content">
                     <button>Desativar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="news">
              <div class="row">
                <div class="col-12 col-lg-12 col-xl-6">
                  <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                </div>
                <div class="col-12 col-lg-12 col-xl-6">
                  <div class="content">
                    <button>Desativar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="news">
              <div class="row">
                <div class="col-12 col-lg-12 col-xl-6">
                  <div class="picture"><img src="http://placehold.it/100x100" alt="Placeholder"></div>
                </div>
                <div class="col-12 col-lg-12 col-xl-6">
                  <div class="content">
                    <button>Desativar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>



    <footer>
<h1></h1>
    </footer>
  </body>
</html>
