<?php
  include 'conexao.php';
  session_start();   // Sessão validação usuario

?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
   <link rel="stylesheet" type="text/css" href="css/EstiloLogin.css">
  <title>Login</title>
</head>
<body>

  <div class="container" id="login">
    <div class="imgcontainer">
      <img src="image/Logo_2.png" alt="Logo" class="logo">
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
      //$usuario = $_POST['nomeCompleto'];
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

    if (empty($usuario) || empty($senha)) {
      echo "Preencha todos os campos!";
      }else {
        $query = "SELECT perfil, usuario, senha FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = mysqli_query($conexao, $query);
        $busca = mysqli_num_rows($result);
        $linha = mysqli_fetch_assoc($result);

    if ($busca > 0 ) {
      $_SESSION['nomeCompleto'] = $linha['nomeCompleto'];
      $_SESSION['usuario'] = $linha['usuario'];
      header('Location: logado.php');
      exit;
      }else {
    echo "<h3>Usuario ou Senha Inválido!</h3>";
      }
    }
  }
  ?>
      <!-- Fim do codigo validação usuario -->

<script>
// Obtenha o modal
var modal = document.getElementById('id01');

// Quando o usuário clica em qualquer lugar fora do modal, feche-o
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
