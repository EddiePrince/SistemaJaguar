<?php
  //Conecção com Banco
  include 'conexao.inc.php';
  include 'verificausuario.inc.php';
  include 'blockAcesso.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrapv3.min.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Cadastro de Usuário</title>
</head>

<body class="bg-light">

	<div id="pageUsuario">

	      <div class="logo_admin">
        <img src="img/logo.png">  <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
      </div>


			<div id="cadusuario">
        <form class="corpoAdm" method="post" action="post_cadastro_usuario.php">
        <div>
          <!-- Menu -->
          <?php include 'exibirMenu.inc.php'; ?>
          <!-- Fim Menu -->
        </div>
					<h3>Cadastro Usuario</h3><br>
        	<div class="container">
	          <div class="row">
		          <div class="col-md-3 mb-3">
  						  <label>Perfil: </label><br>
  						  <select class="form-control" name="perfil" required autofocus>
    							<option>Selecione o Perfil do Usuário</option>
    							<option value="Administrador">Administrador</option>
    							<option value="Agente">Agente</option>
  						  </select><br><br>
					    </div>
    					<div class="col-md-2 mb-3">
				      	<label>Matricula:</label><br>
				      	<input class="form-control" type="text" name="matricula" required><br><br>
  				    </div>
    		        <div class="col-md-7 mb-3">
    					    <label>Nome:</label><br>
    					    <input class="form-control" type="text" name="nome" required><br><br>
    					</div>
    					</div>


      				<div class="row">
                <div class="col-md-5 mb-3">
                  <label>E-mail:</label><br>
                  <input class="form-control" class="usuario" type="text" name="email" size="35" maxlength="100"  required><br><br>
                </div>
    		          <div class="col-md-3 mb-3">
    					    <label>Telefone Residencial:</label><br>
    					    <input class="form-control" type="text" name="telefone" required><br><br>
  					    </div>

      					<div class="col-md-4 mb-3">
    					    <label>Celular:</label><br>
    					    <input class="form-control" type="text" name="celular" required><br><br>
      					</div>
				      </div>

      				<div class="row">
      		      <div class="col-md-3 mb-3">
      						<label>Senha:</label><br>
      					  <input class="form-control" type="text" name="senha" required><br><br>
      					</div>
      				</div>
		        <button class="btn btn-default" type="submit">Cadastrar</button><br><br><br><br>
      		</div>
        </div>
		   </form>

    <div class="footer">
      <?php include 'footer.php'; ?>
    </div>
  </div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
