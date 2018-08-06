<?php
//Conecção com Banco
  include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco
?>

<?php


$agenteRecebedor = $_POST['agenteRecebedor'];
$tipoRecolhimento = $_POST['tipoRecolhimento'];
$nomeEntregador = $_POST['nomeEntregador'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$enderecoEntregador = $_POST['enderecoEntregador'];
$municipioEntregador = $_POST['municipioEntregador'];
$autoTermoBoletim = $_POST['autoTermoBoletim'];
$uploadDoc = $_POST['uploadDoc'];
$nomeUnidade = $_POST['nomeUnidade'];
$municipioProcedencia = $_POST['municipioProcedencia'];
$ufProcedencia = $_POST['ufProcedencia'];
$locUltimaProcedencia = $_POST['locUltimaProcedencia'];
$dieta = $_POST['dieta'];
$nomeComum = $_POST['nomeComum'];
$nomeCientifico = $_POST['nomeCientifico'];
$familiaAnimal = $_POST['familiaAnimal'];
$ordemAnimal = $_POST['ordemAnimal'];
$codMarca = $_POST['codMarca'];
$tipoMarca = $_POST['tipoMarca'];
$localMarca = $_POST['localMarca'];
$tipoDestinacao = $_POST['tipoDestinacao'];
// $periodoQuarentena = $_POST['periodoQuarentena'];
// $condicao1 = $_POST['condicao1'];
// $condicao2 = $_POST['condicao2'];
// $condicao3 = $_POST['condicao3'];
// $subtipoDestinacao = $_POST['subtipoDestinacao'];


$sql = "insert into animais (dataRecebimento, agenteRecebedor, tipoRecolhimento, nomeEntregador, cpf_cnpj, telefone,
 cep, enderecoEntregador, municipioEntregador, autoTermoBoletim, uploadDoc, nomeUnidade, municipioProcedencia,
 ufProcedencia, locUltimaProcedencia, dieta, nomeComum, nomeCientifico, familiaAnimal, ordemAnimal,
 codMarca, tipoMarca, localMarca, tipoDestinacao)

values ( NOW(), '$agenteRecebedor', '$tipoRecolhimento', '$nomeEntregador', '$cpf_cnpj', '$telefone',
 '$cep', '$enderecoEntregador', '$municipioEntregador', '$autoTermoBoletim', '$uploadDoc', '$nomeUnidade',
 '$municipioProcedencia', '$ufProcedencia', '$locUltimaProcedencia', '$dieta', '$nomeComum',
 '$nomeCientifico', '$familiaAnimal', '$ordemAnimal', '$codMarca', '$tipoMarca', '$localMarca', '$tipoDestinacao')"; //iserindo dados digitados do formulario para a tabela usuarios



//, periodoQuarentena, condicao1, condicao2, condicao3, subtipoDestinacao
//, '$periodoQuarentena''$condicao1', '$condicao2', '$condicao3' , '$subtipoDestinacao'

//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "Operação foi Realizada com Sucesso!";

mysqli_close($conexao);


 ?>
<br> <a href="CadastroAnimal.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a>
