      <!-- Menu -->
<div>

<input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>

<form action=" " method="post">
	<div id="divBusca">
	    <img src="img/icon pesquisa.png" alt="Buscar..."/>
	        <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
	    <button id="btnBusca">Buscar</button>
	</div>
</form>

<nav class="menu">
	<ul>
		<!-- <li> <a href="areaadm.php">Home</a></li> -->
		<li><a href="#">Usuários</a>
			<ul>
				<li><a href="menu/listaUsuarios.php">Visualizar</a></li>
				<li><a href="cadastroUsuario.php">Cadastrar</a></li>
				<li><a href="#">Excluir Usuário do Banco de Dados</a></li>
			</ul>
		</li>
		<li><a href="">Animais</a>
			<ul>
				<li><a href="menu/listaAnimais.php">Visualizar</a></li>
				<li><a href="CadastroAnimal.php">Cadastrar</a></li>
				<li><a href="#">Excluir Animal do Banco de Dados</a></li>
			</ul>
		</li>
		<li><a href="">Unidades</a>
			<ul>
				<li><a href="menu/listaUnidades.php">Visualizar</a></li>
				<li><a href="CadastroUnidade.php">Cadastrar</a></li>
				<li><a href="#">Excluir Unidade do Banco de Dados</a></li>
			</ul>
		</li>
		<li><a href="#">Emitir Relatório</a></li>
		<li><a href="rec_senha_adm.php" class="recsenha">Recuperação de Senha</a></li>
		<li><a href="ajuda.php">Ajuda</a></li>
</div>
	</ul>
</nav>
</div>
		<!-- Fim Menu -->
