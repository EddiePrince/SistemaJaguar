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
				
          	
      			<!-- <form  id="divBusca" class="form" action="" method="get">
        			<input type="text" name="filtro" id="txtBusca" placeholder="Pesquisar..."/>
        			<button type="submit" id="btnBusca"><img src="img/icon pesquisa.png" alt="Buscar..."/></button>
        		</form> -->
          		
        
			</div>
		</div>
	</div>
</div>