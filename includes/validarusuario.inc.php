      <!-- Inicio do codigo validação usuario -->
  <?php
    if (isset($_POST['entrar']) && $_POST['entrar'] == 'login') {
      //$usuario = $_POST['nomeCompleto'];
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

    if (empty($usuario) || empty($senha)) {
      echo "<br>Preencha todos os campos!";
      }else {
        $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = mysqli_query($conexao, $query);
        $busca = mysqli_num_rows($result);
        $linha = mysqli_fetch_assoc($result);
/*
    if (($busca > 0) && ($perfil = 'Agente')) {
      //$_SESSION['Agente'] = $linha['perfil'];
      //$_SESSION['nomeCompleto'] = $linha['nomeCompleto'];
      $_SESSION['usuario'] = $linha['usuario'];
      header('Location: logado.php');
      exit;
}*/
    // esse condicional abaixo nao funcionou verificar se deve ser colocado de volta o perfil na tela de login
    if (($busca > 0) && ($perfil = 'Administrador')) {
      //$_SESSION['Administrador'] = $linha['perfil'];
      //$_SESSION['nomeCompleto'] = $linha['nomeCompleto'];
      $_SESSION['usuario'] = $linha['usuario'];
      header('Location: logado_adm.php');
      exit;
      // esse condicional abaixo nao funcionou verificar se deve ser colocado de volta o perfil na tela de login

      }else {
    echo "<h4><br>Usuario ou Senha Inválido!</h4>";
      }
    }
  }
  ?>
      <!-- Fim do codigo validação usuario -->
