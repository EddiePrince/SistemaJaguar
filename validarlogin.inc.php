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
            if($result->num_rows == 0){
            echo "Dados não encontrados";
            } 
            else if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
               $idUsuario = $row['idUsuario'];
               $nome = $row['nome'];
               $perfil = $row['perfil'];
              }
              if ($perfil == 'administrador') {
                
                $_SESSION['idUsuario'] = $idUsuario;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['senha'] = $senha;
                header('Location: areaadm.php');
                exit;
              } else if ($perfil == 'agente'){
                $_SESSION['idUsuario'] = $idUsuario;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['senha'] = $senha;
                header('Location: areaagente.php');
                exit;
              }
            }
          }
    }


  ?>
      <!-- Fim do codigo validação usuario -->
