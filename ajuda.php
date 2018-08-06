<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Ajuda</title>
<link rel="stylesheet" href="style/bootstrap.min.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Guia de Instrução</title>
<link href="style/bootstrap2.min.css" rel="stylesheet">
</head>
<body>
	<div class="imgcontainer">
		<img src="img/Logo.png" alt="Logo" class="logo" height="150" width="200">
	</div>
<!-- <h2>Central de Ajuda</h2> -->
<!-- <br> <a href="areaadm.php">Sair</a> --<br>
<!-- <div class="c27-section-nav-plank">
	<div class="section-nav-plank__container">
    	<ul class="section-nav-plank__section">

	        <li class="section-nav-plank__title">
	            <a href="" class="section-nav-plank__link">
	                Compartilhar
	                <img class="section-nav-plank__arrow" src="" alt="">
	            </a>
	        </li>

			        <li class="section-nav-plank__title">
			            <a href="" class="section-nav-plank__link">
			                Recupere
			                <img class="section-nav-plank__arrow" src="" alt="">
			            </a>
			        </li>

					        <li class="section-nav-plank__title">
					            <a href="" class="section-nav-plank__link">
					                Procurar
					                <img class="section-nav-plank__arrow" src="" alt="">
					            </a>
					        </li>

									        <li class="section-nav-plank__title">
									            <a href="" class="section-nav-plank__link">
									                Redefinir
									                <img class="section-nav-plank__arrow" src="" alt="">
									            </a>
									        </li>

											        <li class="section-nav-plank__title">
											            <a href="" class="section-nav-plank__link">
											                Problemas
											                <img class="section-nav-plank__arrow" src="" alt="">
											            </a>
											        </li>

									        <li class="section-nav-plank__title">
									            <a href="" class="section-nav-plank__link">
									                Como
									                <img class="section-nav-plank__arrow" src="" alt="">
									            </a>
									        </li>

					        <li class="section-nav-plank__title">
					            <a href="" class="section-nav-plank__link">
					                Recupere
					                <img class="section-nav-plank__arrow" src="" alt="">
					            </a>
					        </li>

			        <li class="section-nav-plank__title">
			            <a href="" class="section-nav-plank__link">
			                Editar
			                <img class="section-nav-plank__arrow" src="" alt="">
			            </a>
			        </li>

        <li class="section-nav-plank__title">
            <a href="" class="section-nav-plank__link">
                Alterar
                <img class="section-nav-plank__arrow" src="" alt="">
            </a>
        </li>
    </ul>
</div></div> -->

<?php include_once("conexao.inc.php");
$result_ajuda = "SELECT * FROM ajuda WHERE idAjuda='1'";
$resultado_ajuda = mysqli_query($conexao, $result_ajuda);
$row_ajuda = mysqli_fetch_assoc($resultado_ajuda);
?>

		<div class="container theme-showcase" role="main">

			<div class="page-header">
				<h1>Instruções Básicas do Sistema</h1>
			</div>
			<div>

			  <!-- Abas de Navegação -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sobre o Sistema</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Conhecendo o Sistema</a></li>
				<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Filtro de Busca</a></li>
				<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Permissões</a></li>
				<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Tipos de Usuários</a></li>
				<li role="presentation"><a href="#detalhes" aria-controls="detalhes" role="tab" data-toggle="tab">Informações Gerais</a></li>
				<li role="presentation"><a href="#tutores" aria-controls="tutores" role="tab" data-toggle="tab">Tutorial</a></li>
			  </ul>

				<!-- Conteúdo refente a cada aba de Navegação -->
			  <div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<?php echo $row_ajuda['sobreSist']; ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<?php echo $row_ajuda['conhecendoSist']; ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages">
						<?php echo $row_ajuda['filtroBusca']; ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings">
						<?php echo $row_ajuda['permissaoUser']; ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="detalhes">
						<?php echo $row_ajuda['tiposUser']; ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="tutores">
						<?php echo $row_ajuda['infGerais']; ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="tutores">
						<?php echo $row_ajuda['tutorial']; ?>
					</div>
			  </div>

			</div>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


</body>
</html>
