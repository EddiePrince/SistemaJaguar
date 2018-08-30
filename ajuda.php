<?php
  //Erro de Validação W3C Identificado
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
		<title>Ajuda</title>
	</head>
	<body>
		<div id="pageAjuda">
		    <div class="logo_admin">
		       <img src="img/logo.png" alt="Logo">  <a id="logout" href="logout.php"  class="btn btn-default navbar-btn pull-right">  Logout  <img src="img/logout.png" alt="Logout"></a>
		    </div>
				<!-- Menu -->
				<!-- Erro de Validação W3C Identificado -->
				<?php include 'exibirMenu.inc.php'; ?>
				<!-- Fim Menu -->

			<div  class="corpoAdm" id="corpoAdm">

        <div class="container">

            <br><br><strong class="titulo1">Instruções Básicas do Sistema</strong><br><br>

                      <h3> <strong class="titulo">Sobre o Sistema: </strong></h3> <p class="paragrafo">É um software de gestão de animais silvestre. Tem a finalidade de auxiliar o gerenciamento integrado e centralizado das informações. Utiliza algumas tecnologias livres e conhecidas. Pode ser utilizado em qualquer ambiente como Windows, Linux e outros, pois
                      necessita apenas de um navegador Web, um usuário e senha de acesso fornecida pelo Administrador do Sistema.
                    </p>

                      <h3><strong class="titulo">Acesso ao Sistema: </strong></h3>  	<p class="paragrafo"> Para acessar o sistema basta abrir o navegador, acessar o endereço na internet onde o sistema
                      foi disponibilizado e então informar seu login e senha. Depois de efetuar o login será redirecionados para a Área de trabalho pincipal do sistema. Quando um cadastro é realizado uma listagem de registro é exibida em outra área referente a este cadastro.
                    </p>

                      <h3><strong class="titulo">Usuários e Tipos de Usuários: </strong></h3> <p class="paragrafo">O cadastro de tipo de usuário define as categorias de usuários existentes atualmenteque são; Administrador e Agente, as quais garantem um nível hierárquico de acesso a determinadas funcionalidade do sistema. O cadastro de usuários, propriamente dito, permite
                      o cadastro dos usuários que irão acessar o sistema, respeitando o seu tipo e as demais atribuições de acesso para a instituição, NATURATINS.
                    </p>
                   <h3><strong class="titulo">Cadastro de Pessoa Física/Jurídica no Sistema: </strong></h3>	<p class="paragrafo"> Neste	módulo você pode inserir as informações das pessoas físicas e jurídicas que serão trabalhadas dentro do sistema. Usuarios (pessoas físicas) e Unidades central e Regionais (pessoas jurídicas): Neste cadastro você poderá inserir as regionais responsáveis pela entrega do animal silvestre.
                    </p>

                   </div>
	                </div>
			<!-- Erro de Validação W3C Identificado -->
			<div class="footer">
				<?php include 'footer.php'; ?>
			</div>
			</div>

	</body>
</html>
