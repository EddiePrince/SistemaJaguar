<?php
	include 'conexao.inc.php';
	include 'verificausuario.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<title>Perfil do Usuário</title>
	</head>

	<body>
		<div id="releasebox">
			<form>
				<input type="checkbox" name="cond1">
				O animal
				<input type="checkbox" name="cond2">
				<input type="checkbox" name="cond3">
			</form>
		</div>
		<?php
		include 'header.inc.php';
		?>
    <div id="pagePerfilAnimal" class="backgroundimgs">


  <div id="fundoTransparente">

        <h1>Perfil do Usuário</h1>
        <table>
        	<tr></tr>
        </table>

   		<button>Editar dados</button>
   		<button>Excluir Usuário</button>
					<!-- Erro de Validação W3C Identificado -->
          <?php include 'perfilUsuario.inc.php'; ?>
      	</table>
      </div>
      </div>
			<!-- Erro de Validação W3C Identificado -->
			<div class="footer">
				<?php include 'footer.php'; ?>
			</div>

		</div>
	</div>

	</body>

</html>