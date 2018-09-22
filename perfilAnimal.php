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
		<title>Perfil de Animais</title>
	</head>

	<body>
		<!-- <div id="releasebox">
			<form>
				<input type="checkbox" name="cond1">
				<input type="checkbox" name="cond2">
				<input type="checkbox" name="cond3">
			</form>
		</div> -->
		<?php
		include 'header.inc.php';
		?>
	    <div id="pagePerfilAnimal" class="backgroundimgs">
	  		<div id="fundoTransparente">
					<div class="container">


		        <h1>Perfil Do Animal</h1>


						<!-- Abas -->
					<nav class="nav_tabs">
								<ul>
									<li>
										<input type="radio" id="tab1" class="rd_tab" name="tabs" checked>
										<label for="tab1" class="tab_label">Tab 1</label>
										<div class="tab-content">
											<div class="container">
												<article>
													<h2>Perfil do Animal</h2>
													<?php include 'perfilAnimal.inc.php'; ?>
													<label>Ultima Procedencia: <?php echo $ultimaProcedencia;	?></label><br>
													<label>Nome Comum: <?php	echo $nomeComum;	?></label><br>
													<label>Familia: <?php	echo $familia;	?></label><br>
													<label>Ordem: <?php	echo $ordem;	?></label><br>
												</article>

											<br><div  id="btnPerfil"  >
												<a class="btnSoltura" href="#" > Área de Soltura </a>
											</div>

											<br><div  id="btnPerfil"  >
												<a class="btnQuarentena" href="#" > Quarentena </a>
											</div>

											<br><div  id="btnPerfil"  >
												<a class="btnDestinacao" href="#" > Destinação </a>
											</div>
										</div>
										</div>
									</li>
									<li>
										<input type="radio" name="tabs" class="rd_tab" id="tab2">
										<label for="tab2" class="tab_label">Tab 2</label>
										<div class="tab-content">
											<h2>Title 2</h2>
											<article>
											Sed sit amet mauris vitae lorem pretium congue. Donec pulvinar auctor est, a porta ipsum vulputate ac. Ut sit amet sollicitudin ante. Sed gravida nulla et nibh consequat sagittis. Donec eu justo eu tortor elementum scelerisque. Mauris mollis volutpat tellus, id volutpat massa ultricies vel. Donec mollis arcu leo, ac ullamcorper eros viverra ut. Aliquam cursus justo nec purus condimentum, eu dignissim nunc mattis. Sed fermentum sollicitudin felis mattis malesuada. Quisque tempor tellus a odio euismod, non suscipit justo laoreet. Curabitur vel urna lorem. Pellentesque semper justo leo, in tristique ex porta at. Sed justo massa, lobortis quis hendrerit ac, eleifend vitae tellus.
											</article>
										</div>
									</li>
									<li>
										<input type="radio" name="tabs" class="rd_tab" id="tab3">
										<label for="tab3" class="tab_label">Tab 3</label>
										<div class="tab-content">
											<h2>Title 3</h2>
											<article>
												Integer at ligula eget turpis elementum ultrices eget quis tortor. Duis posuere lorem justo, ut malesuada tortor tempus a. Curabitur pellentesque ultricies consectetur. Maecenas diam lorem, hendrerit eget sem ut, tincidunt vulputate ipsum. In vel enim et erat sagittis eleifend vel eu nunc. In hac habitasse platea dictumst. Integer tincidunt, augue at posuere eleifend, lacus quam hendrerit risus, aliquam sollicitudin ligula tellus quis elit. Proin varius fringilla vehicula. Phasellus mollis sollicitudin orci, id fringilla magna volutpat non. Nullam sed luctus nisl.
											</article>
										</div>
									</li>
									<li>
										<input type="radio" name="tabs" class="rd_tab" id="tab4">
										<label for="tab4" class="tab_label">Tab 4</label>
										<div class="tab-content">
											<h2>Title 4</h2>
											<article>
												Morbi condimentum, ligula in pretium feugiat, erat turpis egestas nisl, eu rutrum felis tortor eget tellus. Donec bibendum finibus sapien id vehicula. Nullam tempus, leo ut tristique pharetra, ligula sapien dictum nunc, eget lacinia mauris tellus sit amet ligula. Etiam posuere metus elementum sem feugiat laoreet. Curabitur efficitur tellus sed felis feugiat vehicula. Ut congue dui at ligula tempus accumsan. Sed ut lacus imperdiet erat aliquam pharetra. Phasellus ultricies nisi mauris, quis tincidunt tortor viverra id. Ut sit amet finibus mi, id fringilla ex. Fusce hendrerit purus nec ipsum volutpat, eu condimentum eros congue. Sed at leo tortor. In a ultrices sapien. Nulla posuere urna id urna semper aliquet.
											</article>
										</div>
									</li>
								</ul>
							</nav>

							<!-- FIm Abas -->



					</div>
	      </div>
	    </div>
			<!-- Erro de Validação W3C Identificado -->
			<div class="footer">
				<?php include 'footer.php'; ?>
			</div>

	</body>

</html>
