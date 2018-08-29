<?php
	//Erro de Validação W3C Identificado
	  //Conecção com Banco
	  include 'conexao.inc.php';
	  include 'verificausuario.inc.php';
	  include 'post_cadastro_animais.php';
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
		<title>Cadastro de Animais</title>
	</head>

	<body>
		<div id="pageAnimall">
			<div class="corpoAdmm" id="corpoAdm">
				 <div class="logo_admin">
					<img src="img/logo.png" alt="Logo">  <a id="logout" href="logout.php" type="button" class="btn btn-default navbar-btn pull-right"> Logout  <img src="img/logout.png" alt="Logout"></a>
				</div>

					<!-- Menu -->
					<!-- Erro de Validação W3C Identificado -->
          <?php include 'exibirMenu.inc.php'; ?>

				<form method="post" action="post_cadastro_animais.php">
					<div class="container">
						<br><br><h3>Cadastro de Animais</h3><br><br>
									<h4>Dados  da Ficha e do Animal</h4>
										<div class="row">
											<div class="col-md-2 mb-3">
												<p>Número da Ficha:</p>
												<!-- Erro de Validação W3C Identificado -->
												<input class="form-control" type="number" disabled name="idAutomatico" value="<?php echo $idAutomatico?>">
											</div>
											<div class="col-md-2 mb-3">
												<p>Data:</p>
												<!-- Erro de Validação W3C Identificado -->
												<input id="inputdata" class="form-control"  name="dataRecebimento" type="date">
											</div>
											<div class="col-md-8 mb-3">
												<p>Agente Recebedor:</p>
												<p><input class="form-control" type="text" name="nomeAgente" autofocus></p>
											</div>
										</div>
									</div>
								</div>
							</div>

								<!-- Dados do Entregador/Autuado  -->

								<div class="form_div"><br>
									<div class="container">
									<h4>Dados do Entregador</h4>
										<div class="row">
											<div class="col-md-2 mb-3">
												<p>Tipo de Recolhimento:</p>
												<select class="form-control" name="tipoEntrega" size=1>
												<option>Apreensão</option>
												<option>Resgate/Recolhimento</option>
												<option>Entrega Voluntária</option>
												</select><br><br>
											</div>
											<div class="col-md-7 mb-3">
												<p>Nome Entregador:</p>
												<p><input class="form-control" type="text" name="nomeEntregador"></p>
											</div>

										</div>
									</div>




								<!-- Dados da Unidade Acolhedora -->

								<div class="form_div"><br>
									<div class="container">
										<h4> Dados da Unidade Acolhedora</h4>
											<div class="row">
			          							<div class="col-md-4 mb-3">
													<p>Selecione a Unidade:</p>
													<select class="form-control" name="nomeUnidade" size=1>
													<?php include 'selectUnidades.inc.php'; ?>
													</select><br><br>
													<input class="btn btn-default" name="submit" type="submit" value=" Salvar "><br>

												</div>
											</div>
										</div>

								</div>
								<hr>

							</div>

				</form>

			 <!-- Erro de Validação W3C Identificado -->
			 <div class="footer">
				 <?php include 'footer.php'; ?>
			 </div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/main.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


	</body>

	</html>
