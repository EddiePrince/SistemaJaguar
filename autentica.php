
<head>
    <!-- Autenticar usuario e senha -->
    <script type="text/javascript">
    //função para redirecionar após autenticado
    function loginsuccessfully(){
      setTimeout("window.location='logado.php'", 5000);
    }
    //função para redirecionar novamente ao login se o usuario for invalido
    function loginfailed(){
      setTimeout("window.location='index.php'", 5000);
    }
  </script>
</head>

<?php
//Autenticar usuario e senha
include 'post_cadastro_usuario.php';
?>
<?php
$login = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '$login' and senha = '$senha' ") or die(mysql_error());
$row = mysql_num_rows($sql);
if ($row > 0 ) {
  session_start();
  $_SESSION['usuario'] = $_POST['usuario'];
  $_SESSION['senha'] = $_POST['senha'];
  echo "Autenticado com sucesso";
  echo "<script>loginsuccessfully()</script>";
}else {
  echo "Nome de usuario ou senha invalido. Aguarde um instante para tentar novamente";
  echo "<script>loginfailed()</script>";
}
?>






<?php
/*
 include 'post_cadastro_usuario.php';
 $login = $_POST['usuario'];
 $senha = $_POST['senha'];

 $sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha' ") or die(mysql_error());
 $row = mysql_num_rows($sql);
 if ($row > 0 ) {
   session_start();
   $_SESSION['usuario'] = $_POST['usuario'];
   $_SESSION['senha'] = $_POST['senha'];
   echo "Autenticado com sucesso";
   echo "<script>loginsuccessfully()</script>";
 }



$login = $_POST['usuario'];
$senha = $_POST['senha'];

if (isset($_POST['login'])) {
  if ($_POST['login'] == $login and $_POST['senha'] == $senha) {
    echo "Login efetuado com sucesso";
  }else {
    echo "Login ou senha inválido";
  }
} */
 ?>
