<?php
include 'includes/conexao.php';
session_start();   // Sessão

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Área de Login Sistema Jaguar - Naturatins">
    <meta name="author" content="William Alves">
    <link rel="icon" href="image/favicon.ico">
    <title>Login Sistema Jaguar</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script href="js/ie-emulation-modes-warning.js" ></script>
  </head>

  <body class="text-center">

    <form class="form-signin" method="post" action="">
      <img class="mb-4" src="image/logo_5.png" alt="" width="182" height="152">
      <h1 class="h3 mb-3 font-weight-normal">Gestão de Animais Silvestres</h1><br><br>

      <label for="inputPassword" class="sr-only">Usuário</label>
      <input type="text" name="usuario" class="form-control" placeholder="Inserir a Matricula da Empresa" required autofocus><br>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      <input type="hidden" name="entrar" value="login">
    </form>
    <!-- Viewport IE10 hackear a superfície / desktop windows8 bug -->
    <script href="js/ie10-viewport-bug-workaround.js" ></script>


          <!-- Inicio do codigo validação usuario -->
      <?php
        if (isset($_POST['entrar']) && $_POST['entrar'] == 'login') {
          $usuario = $_POST['usuario'];
          $senha = $_POST['senha'];

        if (empty($usuario) || empty($senha)) {
          echo "<br><p style='color:blue;'>Preencha todos os campos!<p>";
          }else {
            $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            $result = mysqli_query($conexao, $query); // trazer o resultado de query
            $busca = mysqli_num_rows($result); // retornar se achou ounaotrue ou false
            $linha = mysqli_fetch_assoc($result);

            //buscar os dados do servidor e salvar na sessao
        if ($busca > 0)  {
          //$_SESSION['Administrador'] = $linha['Administrador'];
          $_SESSION['usuario'] = $linha['usuario'];
          $_SESSION['senha'] = $linha['senha'];
          header('Location: areaadm.php');
          exit;
            }else {
              echo  "<script>alert('Usuario ou Senha Inválido!');</script>";


              //echo "<h6 style='color:red;'><br>Usuario ou Senha Inválido!</h6>";

          }
        }
      }
      ?>
          <!-- Fim do codigo validação usuario -->


  </body>
</html>


<!-- <label for="inputEmail" class="sr-only">Email</label>
<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
