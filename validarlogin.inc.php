<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>

      <!-- Inicio do codigo validação usuario -->
  <?php

    if (isset($_POST['entrar']) && $_POST['entrar'] == 'login')
    {
        $matricula = $_POST['matricula'];
        $senha = $_POST['senha'];

      if (empty($matricula) || empty($senha)) {
        echo "<br><p style='color:blue;'>Preencha todos os campos!<p>";
        }else {
          $query = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
          $result = mysqli_query($conexao, $query); // trazer o resultado de query
          $busca = mysqli_num_rows($result); // retornar se achou ou  nao true ou false
          $linha = mysqli_fetch_assoc($result);

          //buscar os dados do servidor e salvar na sessao
      if ($busca > 0)  {
        $_SESSION['Administrador'] = $linha['Administrador'];
        $_SESSION['matricula'] = $linha['matricula'];
        $_SESSION['senha'] = $linha['senha'];

        if($linha['perfil'] == 'Administrador'){
          header('Location: areaadm.php');
        }
        else
        {
          header('Location: areaagente.php');
        }


      } else {
      echo "<h4 style='color:red;'><br>Usuario ou Senha Inválido!</h4>";
        }
      }
  }


  ?>
      <!-- Fim do codigo validação usuario -->
