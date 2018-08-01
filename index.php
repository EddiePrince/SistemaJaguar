<?php
include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="br-pt">
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/EstiloLogin.css">
  <title>Login</title>
</head>
<body>
    <div class="imgcontainer">
      <img src="image/Logo_2.png" alt="Logo" class="logo">
    </div>
  	<h2>Login</h2>
    <div class="container">
      <form method="post" action="logado.php">

        <p>Perfil:</p>
        <select name="perfil">
          <option >Selecione seu Perfil</option>
          <option value="Administrador">Administrador</option>
          <option value="Agente">Agente</option>
        </select><br><br><br>

      <label for="name"><b>Usuário:</b></label>
      <input type="text" placeholder="Insira sua Matricula da Empresa" name="login" required autofocus>

      <label for="senha"><b>Senha:</b></label>
      <input type="password" placeholder="Digite sua senha" name="senha" required>
      <button type="submit">Login</button>
      <!-- parte do codigo login --><input type="hidden" name="entrar" value="login"> <!-- parte codigo login -->
      <label>
        <input type="checkbox" checked="checked" name="remember">Lembre de mim.
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="reset" value="Limpar" class="cancelar">Inserir Novo</button>
      <span class="fazer"><a href="solicitar_cadastro.php">Solicitar Cadastro</a></span>
      <span class="esqueceu"><a href="recuperar_Senha.php">Solicitar Recuperação de Senha?</a></span>
    </div>
    </form>
	<footer></footer>

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
