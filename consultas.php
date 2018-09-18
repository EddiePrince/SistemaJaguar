<?php
  //Conecção com Banco
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
     <title>Pesquisa</title>
   </head>
   <body>
<?php
    include 'header.inc.php';

  ?>
     <div id="pageAdm" class="backgroundimgs">
 			<div id="fundoTransparente">

       <?php 'consultas.inc.php';  ?>  
   
        <form  id="divBusca" class="form" action="consultas.inc.php" method="get">
          <input type="text" name="filtro" id="txtBusca" placeholder="Pesquisar..."/>
          <button type="submit" id="btnBusca"><img src="img/iconpesquisa.png" alt="Buscar..."/></button>
        </form>      
    
      </div>

       <div class="footer">
         <?php include 'footer.php'; ?>
       </div>
     </div>

   </body>
 </html>
