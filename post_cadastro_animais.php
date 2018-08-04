<?php
//Conecção com Banco
include 'includes/conexao.php';//inclusão do arquivo de conexão com o banco

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
$periodoQuarentena = $_POST['periodoQuarentena'];
$tipoDestinacao = $_POST['tipoDestinacao'];
$subtipoDestinacao = $_POST['subtipoDestinacao'];
// $condicao1 = $_POST['condicao1'];
// $condicao2 = $_POST['condicao2'];
// $condicao3 = $_POST['condicao3'];


// "INSERT INTO `animais` (`nFicha`, `dataRecebimento`, `modificadoem`, `agenteRecebedor`, `tipoRecolhimento`, `nomeEntregador`, `cpf_cnpj`, `telefone`, `cep`, `enderecoEntregador`, `municipioEntregador`, `idDocumento`, `autoTermoBoletim`, `uploadDoc`, `idUnidade`, `nomeUnidade`, `municipioProcedencia`, `ufProcedencia`, `locUltimaProcedencia`, `dieta`, `nomeComum`, `nomeCientifico`, `familiaAnimal`, `ordemAnimal`, `codMarca`, `tipoMarca`, `localMarca`, `situacao`, `periodoQuarentena`, `tipoDestinacao`, `subtipoDestinacao`, `idArea`) VALUES (NULL, '2018-08-15', '2018-08-08 00:00:00', 'misael', 'tipo1', 'marculino', '0987654321', '6578490324', '77555000', 'rua bairro numero', 'babaçulandia', NULL, '675', 'feff', '1', 'aasasde', 'wewe', 'wewew', 'weeer', '7u7u5', '656yrt', 'ry5y', 'y656', 'tytyu', 'ewter', 'ewtt', 'rtyty', '5u65ert', '30', '665y', '4yrytr', '2')";



$sql = "insert into animais (agenteRecebedor, nomeEntregador, cpf_cnpj, telefone, cep, enderecoEntregador, municipioEntregador, autoTermoBoletim, uploadDoc, nomeUnidade, municipioProcedencia, ufProcedencia, locUltimaProcedencia, dieta, nomeComum, nomeCientifico, familiaAnimal, ordemAnimal, codMarca, tipoMarca, periodoQuarentena, tipoDestinacao, subtipoDestinacao ) values ('$agenteRecebedor', '$tipoRecolhimento', '$nomeEntregador', '$cpf_cnpj', '$telefone', '$cep', '$enderecoEntregador', '$municipioEntregador','$autoTermoBoletim', '$uploadDoc', '$nomeUnidade', '$municipioProcedencia', '$ufProcedencia', '$locUltimaProcedencia', '$dieta', '$nomeComum', '$nomeCientifico', '$familiaAnimal', '$ordemAnimal', '$codMarca', '$tipoMarca', '$periodoQuarentena', '$tipoDestinacao', '$subtipoDestinacao')"; //iserindo dados digitados do formulario para a tabela usuarios
//executa e armazena o $sql
$salvar = mysqli_query($conexao, $sql);

//$linhas = mysqli_affected_rows($conexao); //contagem da quantidade de linhas inseridas na tabela

echo "Operação foi Realizada com Sucesso!";

mysqli_close($conexao);


//echo "Nome: ".$nome."<br>E-mail: ".$email."<br>Telefone: ".$tel."<br>Celular: ".$cel."<br>Usuário: ".$user."<br>Senha: ".$senha;

 ?>
<br> <a href="Cadastro_animais.php"> <input type="button" name="btn" value="Cadastrar Outro Animal">  </a>
