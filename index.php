<?php
  include 'includes/conexao.php';
  session_start();   // Sessão validação usuario

?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Login</title>

</head>
<body>
  <div class="container" id="login">
    <div class="imgcontainer">
      <img src="img/Logo_2.png" alt="Logo" class="logo">
    </div>

  	<h2>Login</h2>

      <form method="post" action=""><br><br>

      <label for="name"><b>Usuário:</b></label>
      <input type="text" placeholder="Insira sua Matricula da Empresa" name="usuario" id="usuario" required autofocus>

      <label for="senha"><b>Senha:</b></label>
      <input type="password"  id="senha"  name="senha" placeholder="Digite sua senha" required>
      <button type="submit">Entrar</button>
      <input type="hidden" name="entrar" value="login">
      <label>
        <input type="checkbox" checked="checked" name="remember">Lembre de mim.
      </label>


      <button type="reset" value="Limpar" class="cancelar">Inserir Novo</button>
      <span class="esqueceu"><a href="recuperar_Senha.php">Solicitar Recuperação de Senha?</a></span>

    </form>

	<footer></footer>

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
      $_SESSION['Administrador'] = $linha['Administrador'];
      $_SESSION['usuario'] = $linha['usuario'];
      $_SESSION['senha'] = $linha['senha'];
      header('Location: areaadm.php');
      exit;
        }else {
    echo "<h4 style='color:red;'><br>Usuario ou Senha Inválido!</h4>";
      }
    }
  }
  ?>
      <!-- Fim do codigo validação usuario -->

</script>

</body>
</html>
