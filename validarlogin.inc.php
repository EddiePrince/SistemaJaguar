
      <!-- Inicio do codigo validação usuario -->
  <?php
    include 'conexao.inc.php';
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