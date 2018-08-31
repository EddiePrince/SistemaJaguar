<div id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<a href=
				<?php 
					if ($_SESSION['perfil'] == 'agente'){
						echo "'areaagente.php'";
					}
					else if ($_SESSION['perfil'] == 'administrador') {
						echo "'areaAdm.php'";
					}
				?> 
				><img id="logo" src="img/logo.png" alt="Logo"></a> 
				<a id="logout" href="logout.php">Log out<img src="img/logout.png" alt="Logout"></a>

				<a href="consultas.php"> <img class="consulta" src="img/consulta.png" alt="consultas"> </a>

			</div>
		</div>
	</div>
</div>