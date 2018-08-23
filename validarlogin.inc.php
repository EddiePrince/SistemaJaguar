<?php
//Conecção com Banco
    include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
   
    if (isset($_POST['entrar']) && $_POST['entrar'] == 'Login'){
        $matricula = $_POST['matricula'];
        $senha = $_POST['senha'];

      if (empty($matricula) || empty($senha)){
        header('Location: index.php');
      }
      else{
            $sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
            $result = $conexao->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
               $nome = $row['nome'];
               $perfil = $row['perfil'];
              }
              if ($perfil == 'administrador') {
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                header('Location: areaadm.php');
                exit;
              } else if ($perfil == 'agente'){
                session_start();
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                header('Location: areaagente.php');
                exit;
              }
            }
          }
    }


  ?>
      <!-- Fim do codigo validação usuario -->
