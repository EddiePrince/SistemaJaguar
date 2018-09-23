<div id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<img id="logo" src="img/logo.png" alt="Logo">

				<a id="logout" href="logout.php">Log out<img src="img/logout.png" alt="Logout"></a>

 			<!-- Menu Provisório  -->
				<div class="container">
	        <div class="row">
	          <div class="col-12 ">
	            <div id="menu">
	             <a href=<?php
									if ($_SESSION['perfil'] == 'agente'){
										echo "'areaagente.php'";
									}	else if ($_SESSION['perfil'] == 'administrador') {
										echo "'areaAdm.php'";	 }	?>>Home</a>
	              <a href="listaAnimais.php">Animais</a>
	              <a href="listaUsuarios.php">Usuários</a>
	            <a href="listaUnidades.php">Unidades</a>
	            <a href="listaAreas.php">Áreas</a>
	              <a href="ajuda.php">Ajuda</a>
	            </div>
	          </div>
	        </div>
	      </div>
 			<!-- Fim do Menu Provisório  -->

  			<!-- <form  id="divBusca" class="form" action="" method="get">
    			<input type="text" name="filtro" id="txtBusca" placeholder="Pesquisar..."/>
    			<button type="submit" id="btnBusca"><img src="img/icon pesquisa.png" alt="Buscar..."/></button>
    		</form> -->


			</div>
		</div>
	</div>
</div>
